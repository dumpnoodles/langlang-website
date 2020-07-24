function loadingMsg(data){
  let wrap = document.getElementById('infoListWrap');
  wrap.innerHTML = `<div class="loading-wait">
                            ${data.message}
                            <div class="loading-icon"><i class="iconfont icon-jiazai"></i></div>
                            </div>`
}