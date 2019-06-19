<template>
   <ul id="xwlist">
       <li v-for="(item,index) in xwdata" :key="index">
           <router-link :to="{name:'xwxq',query:{id:item.id}}">
           <img :src="item.url" alt="" width="100">
           <div>
               <p>{{item.title}}</p>
               <p>{{item.quote}}</p>
           </div>
           </router-link>
       </li>
   </ul>
</template>

<script>
import Bus from "@/router/Bus"
export default {
    name:'xwzx',
    data:()=>({
        xwdata:[
            {url:'../../../static/img/1.png',title:'新闻1',quote:'百度新闻',id:1},
            {url:'../../../static/img/2.png',title:'新闻2',quote:'新浪新闻',id:2},
            {url:'../../../static/img/3.png',title:'新闻3',quote:'腾讯新闻',id:3},
            {url:'../../../static/img/4.png',title:'新闻4',quote:'百度新闻',id:4}
        ],
        on:true,
        title:"新闻列表",
    }),
     methods:{
        fn(){
            Bus.$emit('gevent',[this.on,this.title])
        }
    },
    mounted(){
        window.onload=()=>{
            this.fn()
             Bus.$emit('gevent3',"")
        }
         this.fn();
        Bus.$emit('gevent3',"")
    },
    destroyed(){
        Bus.$emit('gevent',[false,"首页"])
    }
}
</script>

<style scoped>
#xwlist{
    height: 800px;
}
    #xwlist li{
        width: 100%;
        height: 70px;
    }
     #xwlist li img{
         float: left;
     }
      #xwlist li div{
            float: left;
      }
      a{
          color: rgb(61, 61, 61)
      }
</style>
