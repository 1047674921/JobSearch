//index.js
Page({
  data: {
    tab:0,
    item:0,
    list:[{
      id:1,
      name:'歌曲2',
      singer: '佚名',
      musicimage:'../image/timg.jpg'
    },
    {
      id:2,
      name:'歌曲2',
      singer: '佚名',
      musicimage:'../image/timg.jpg'
    },
    {
      id:3,
      name:'歌曲3',
      singer: '佚名',
      musicimage:'../image/timg.jpg'
    },
    {
      id:4,
      name:'歌曲4',
      singer: '佚名',
      musicimage:'../image/timg.jpg'
    },
    {
      id:5,
      name:'歌曲5',
      singer: '佚名',
      musicimage:'../image/timg.jpg'
    },{
      id:6,
      name:'歌曲6',
      singer: '佚名',
      musicimage:'../image/timg.jpg'
    }
  ],
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
