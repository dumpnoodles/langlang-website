// 储存数据
let dataItem = {}
$.ajax({
    url: "./data/newsCategory.php",
    dataType: "json",
    async: false,
    cache: false,
    timeout: 5000,
    data: JSON.stringify({
      module: 'news'
    }),
    headers: {
      "Content-type" : "application/json; charset=utf-8"
    },
    type: "POST",
    beforeSend: function() {
    },
    success: function(req) {
      let tagMenu = document.getElementsByClassName('tab-menu')[0];
      let data = req.data
      let menuHtml = ''
      data.forEach((item, index) => {
        let className = ''
        if( index === 0 ) { className = 'current'; }
        menuHtml += `<a data-type=${item.type} href="javascript: void(0);" onclick="loadNewsData({_this: this, id: ${item.id}, index: ${index}})" class="${className}" title="${item.categoryName}">${item.categoryName}</a>`
      })
      // 菜单
      tagMenu.innerHTML = menuHtml;
      loadNewsData({_this: tagMenu.children[0], id: data[0].id, index: 0})

    },
    complete: function() {
    },
    error: function() {
    }
});

function loadNewsData(params) {

  let categoryType = params._this.getAttribute('data-type')
  let tabContentWrap = document.getElementById('tab-content-wrap');
  let aItem = document.getElementsByClassName('tab-menu')[0].children;
  for(let i = 0; i < aItem.length; i++){ aItem[i].className = '' }
  // 当前栏目高光
  params._this.className = 'current';
  // 获取存储的数据
  let data = dataItem[categoryType]
  undefined == false
  if(data) {
    tabContent(data, tabContentWrap)
    return false
  }

  $.ajax({
      url: "./data/indexNews.php",
      dataType: "json",
      timeout: 5000,
      data: JSON.stringify({
        categoryId: params.id
      }),
      headers: {
        "Content-type" : "application/json; charset=utf-8"
      },
      type: "POST",
      success: function(req) {
        let data = req.data
        tabContent(data, tabContentWrap)
        // 储存数据
        dataItem[categoryType] = req.data
      },
      error: function(res) {
      }
  });
}

function tabContent(data, content) {
  let itemHtml = `<div class="news-wrap"><div class="box clearfix">`
    data.forEach(item => {
      let time = item.time.split(' ');
      itemHtml += `<div class="item">
                      <div class="img-cover" style="background-image: url(../images/news004.jpg)">
                        <img src="./images/blank/indexNews.png" alt="${item.title}">
                      </div>
                      <div class="content-dec">
                        <h4 class="title">${item.title}</h4>
                        <time datetime="${item.time}" pubdate="${time[0]}">${time[0]}</time>
                        <i class="line"></i>
                        <p class="dec">${item.dec}</p>
                        <a href="" title="" class="link-more">
                          查看更多
                          <i class="iconfont icon-jiantou1 rightarrow"></i>
                        </a>
                      </div>
                  </div> `
    })
    itemHtml += `</div></div>`
    content.innerHTML = itemHtml
}
