<template>
  <div id="app">
    <mt-header fixed :title=title>
      <router-link :to="mypath" slot="left" v-if="onoff" >
        <mt-button icon="back" @click="onoff=false">返回</mt-button>
      </router-link>
    </mt-header>
   <!-- 子组件 -->
    <router-view/>
    <mt-tabbar v-model="selected" fixed>
      <mt-tab-item id="home">
        <img slot="icon" src="./assets/img/home.png">
        首页
      </mt-tab-item>
      <mt-tab-item id="vip">
        <img slot="icon" src="./assets/img/huiyan.png">
        会员
      </mt-tab-item>
      <mt-tab-item id="gouwuche">
        <img slot="icon" src="./assets/img/gwc.png">
        购物车
      </mt-tab-item>
      <mt-tab-item id="seek">
        <img slot="icon" src="./assets/img/seek.png">
        查找
      </mt-tab-item>
    </mt-tabbar>
  </div>
</template>

<script>
import Bus from "@/router/Bus"
export default {
  name: "App",
  data:()=>({
    selected:'home',
    title:"首页",
    onoff:false,
    mypath:'/'
  }),
  watch:{
    selected:function(val,oldvar){
      this.$router.replace({name:val})
      if(val=='home'){
        this.title="首页"
      }
      if(val=='vip'){
        this.title="会员"
      }
      if(val=='gouwuche'){
        this.title="购物车"
      }
      if(val=='seek'){
        this.title="查找"
      }
    }
  },
 mounted(){
      Bus.$on("gevent",(data)=>{
          this.onoff=data[0];
          this.title=data[1];
          if(!data[2]){
            this.mypath='/'
          }else{
            this.mypath=data[2]
          }
          
      })
      Bus.$on('gevent2',(data)=>{
         this.title=data[0];
          this.selected=data[1];
      })
      Bus.$on('gevent3',(data)=>{
          this.selected=data;
      })
 }
};
</script>

<style scoped>
#app {
  font-family: "Avenir", Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  margin: 40px 0 55px 0;
}

</style>
