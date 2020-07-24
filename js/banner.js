let slideWrap = document.getElementById('slide-wrap');
let slideContent = slideWrap.children[0];
let liItem = slideContent.getElementsByTagName('li');
let aItem = slideWrap.getElementsByClassName('slide-nav')[0].getElementsByTagName('a');
let prevButton = slideWrap.getElementsByClassName('slide-prev')[0];
let nextButton = slideWrap.getElementsByClassName('slide-next')[0];
let viewWidth = document.documentElement.clientWidth || document.body.clientWidth;
let currentIndex = 0;
let flag = false;
let flagTimer = null;
let autoTimer = null;

slideContent.style.width = viewWidth * liItem.length +'px'
for(let i = 0; i < liItem.length; i++) {
  liItem[i].style.width = viewWidth + 'px'
}
for(let i = 0; i < aItem.length; i++) {
  aItem[i].onclick = function() {
    currentIndex = i
    slide(i)
  }
}
autoPlay()
slideWrap.onmouseenter = function(){
  clearInterval(autoTimer)
}
slideWrap.onmouseleave = function(){
  autoPlay()
}
// prevButton事件
prevButton.onclick = function(){
  if(flag) { return false}
  flag = true
  prev()
}
// nextButton事件
nextButton.onclick = function(){
  if(flag) { return false}
  flag = true
  next()
}
// 自动播放
function autoPlay(){
  autoTimer = setInterval(function(){
    next()
  },3000)
}
// prev
function prev(){
  currentIndex--
  if(currentIndex < 0){ currentIndex = aItem.length - 1}
  slide(currentIndex)
}
// next
function next(){
  currentIndex++
  if(currentIndex == aItem.length){ currentIndex = 0 }
  slide(currentIndex)
}
// 分页按钮高光切换
function toogleHigh(){
  for(let k= 0; k < aItem.length; k++){
    aItem[k].className = ''
  }
  // [a,a,a]
  aItem[currentIndex].className = 'current '
}
// 图片滑动
function slide(number){
  let left = number * viewWidth
  slideContent.style.left = -left + 'px'
  // 开启定时器
  flagTimer = setTimeout(function(){
    flag = false
    clearTimeout(flagTimer)
  },1000)
  toogleHigh()
}
