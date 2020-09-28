//index.js

Page({
  data: {
    tab:0,
    item:0,
  },
  //事件处理函数
  changeItem: function(e) {
    this.setData({
      item: e.target.dataset.item,
    })
  },
  // tab切换
  changeTab: function(e) {
    this.setData({
      tab: e.detail.current
    })
  },
})
