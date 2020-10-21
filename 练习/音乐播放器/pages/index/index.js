//index.js
Page({
  data: {
    tab:0,
    item:0,
    playlist:[{
      id:1,
      name:'歌曲1',
      src: 'https://m701.music.126.net/20201021121511/2a20e578f7e0eecf5d21b11898730064/jdyyaac/obj/w5rDlsOJwrLDjj7CmsOj/4237119620/257d/1f91/56a0/e448ab10e39c33b60aab83df07ca6ecf.m4a',
      singer: '佚名',
      musicimage:'../image/哆啦A梦.jpg'
    },
    {
      id:2,
      name:'歌曲2',
      src: 'https://m701.music.126.net/20201021121511/2a20e578f7e0eecf5d21b11898730064/jdyyaac/obj/w5rDlsOJwrLDjj7CmsOj/4237119620/257d/1f91/56a0/e448ab10e39c33b60aab83df07ca6ecf.m4a',
      singer: '佚名',
      musicimage:'../image/哆啦A梦.jpg'
    },
    {
      id:3,
      name:'歌曲3',
      src: 'https://m701.music.126.net/20201021121511/2a20e578f7e0eecf5d21b11898730064/jdyyaac/obj/w5rDlsOJwrLDjj7CmsOj/4237119620/257d/1f91/56a0/e448ab10e39c33b60aab83df07ca6ecf.m4a',
      singer: '佚名',
      musicimage:'../image/哆啦A梦.jpg'
    },
    {
      id:4,
      name:'歌曲4',
      singer: '佚名',
      src: 'https://m701.music.126.net/20201021121511/2a20e578f7e0eecf5d21b11898730064/jdyyaac/obj/w5rDlsOJwrLDjj7CmsOj/4237119620/257d/1f91/56a0/e448ab10e39c33b60aab83df07ca6ecf.m4a',
      musicimage:'../image/哆啦A梦.jpg'
    },
    {
      id:5,
      name:'歌曲5',
      src: 'https://m701.music.126.net/20201021121511/2a20e578f7e0eecf5d21b11898730064/jdyyaac/obj/w5rDlsOJwrLDjj7CmsOj/4237119620/257d/1f91/56a0/e448ab10e39c33b60aab83df07ca6ecf.m4a',
      singer: '佚名',
      musicimage:'../image/哆啦A梦.jpg'
    },{
      id:6,
      name:'歌曲6',
      src: 'https://m701.music.126.net/20201021121511/2a20e578f7e0eecf5d21b11898730064/jdyyaac/obj/w5rDlsOJwrLDjj7CmsOj/4237119620/257d/1f91/56a0/e448ab10e39c33b60aab83df07ca6ecf.m4a',
      singer: '佚名',
      musicimage:'../image/哆啦A梦.jpg'
    }
  ],
  state: 'paused',
  playIndex: 0,
  play:{
    musicimage:'../image/哆啦A梦.jpg',
    name:' ',
    singer: ' ',
    currentTime: '00:00',
    duration: '00:00',
    percent: 0,
  },
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
  // 实现播放器播放功能
  audioCtx: null,
  onReady: function() {
    this.audioCtx = wx.createInnerAudioContext()
    // 默认选择第1曲
    this.setMusic(0)
    var that = this
    // 播放进度检测
    this.audioCtx.onError(function() {
      console.log('播放失败：' + that.audioCtx.src)
    })
    // 播放完成自动换下一曲
    this.audioCtx.onEnded(function() {
      that.next()
    })
    // 自动更新播放进度
    this.audioCtx.onPlay(function() {})
    this.audioCtx.onTimeUpdate(function() {
      that.setData({
        'play.duration': formatTime(that.audioCtx.duration),
        'play.currentTime': formatTime(that.audioCtx.currentTime),
        'play.percent': that.audioCtx.currentTime / that.audioCtx.duration * 100
      })
    })
    // 格式化时间
    function formatTime(time) {
      var minute = Math.floor(time / 60) % 60;
      var second = Math.floor(time) % 60
      return (minute < 10 ? '0' + minute : minute) + ':' + (second < 10 ? '0' + second : second)
    }
  },
  // 音乐播放
  setMusic: function(index) {
    var music = this.data.playlist[index]
    this.audioCtx.src = music.src
    this.setData({
      playIndex: index,
      'play.name': music.name,
      'play.singer': music.singer,
      'play.coverImgUrl': music.musicimage,
      'play.currentTime': '00:00',
      'play.duration': '00:00',
      'play.percent': 0
    })
  },

  // 播放按钮
  play: function() {
    this.audioCtx.play()
    this.setData({
      state: 'running'
    })
  },

  // 暂停按钮
  pause: function() {
    this.audioCtx.pause()
    this.setData({
      state: 'paused'
    })
  },

  // 下一曲按钮
  next: function() {
    var index = this.data.playIndex >= this.data.playlist.length - 1 ? 0 : this.data.playIndex + 1
    this.setMusic(index)
    if (this.data.state === 'running') {
      this.play()
    }
  },
  
  // 滚动条调节歌曲进度
  sliderChange: function(e) {
    var second = e.detail.value * this.audioCtx.duration / 100
    this.audioCtx.seek(second)
  },

  // 播放列表换曲功能
  change: function(e) {
    this.setMusic(e.currentTarget.dataset.index)
    this.play()
  }
})

