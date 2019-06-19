<template>
  <div id="home">
    <div id="banner">
      <mt-swipe :auto="4000">
        <mt-swipe-item>
          <img src="../assets/img/banner1.jpg" alt width="100%" >
        </mt-swipe-item>
        <mt-swipe-item>
          <img src="../assets/img/banner2.jpg" alt width="100%">
        </mt-swipe-item>
        <mt-swipe-item>
          <img src="../assets/img/banner3.jpg" alt width="100%">
        </mt-swipe-item>
      </mt-swipe>
    </div>
    <ul>
        <li v-for="(item,index) in infoarr" :key="index">
           <router-link :to="item.lujin">
                <span>
                    <img :src="item.url" alt="">
                </span>
                <span>{{item.title}}</span>
            </router-link>
        </li>
    </ul>
  </div>
</template>

<script>
import Bus from "@/router/Bus"
export default {
  name: "Home",
  data:()=>({
      infoarr:[
          {title:'新闻资讯',url:'../../static/1.png',lujin:{name:'xwzx'}},
          {title:'图文分享',url:'../../static/2.png',lujin:{name:'xwzx'}},
          {title:'商标展示',url:'../../static/3.png',lujin:{name:'xwzx'}},
          {title:'反馈留言',url:'../../static/4.png',lujin:{name:'xwzx'}},
          {title:'搜索资讯',url:'../../static/5.png',lujin:{name:'xwzx'}},
          {title:'联系我们',url:'../../static/6.png',lujin:{name:'xwzx'}}
      ]
  }),
  mounted(){
     Bus.$emit('gevent3',"home")
  }
};
</script>

<style scoped>
#home {
  width: 100%;
  height: 714px;
  color: black;
  box-sizing: border-box;
}
#banner {
  width: 100%;
  height:117px;
}
ul{
    display: flex;
    flex-wrap:wrap;
}
ul img{
    width: 40px;
    height: 40px;
}
ul li{
    width: 33%;
    flex-grow: 1;
    height: 60px;
     margin-top: 10px;
}
ul li span{
   
    display: block;
    text-align: center;
}
ul li span{
    color: black;
}
</style>
