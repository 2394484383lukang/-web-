import Vue from 'vue'
import Router from 'vue-router'
import Home from '@/components/Home'
import Vip from '@/components/Vip'
import Gouwuche from '@/components/gouwuche'
import Seek from '@/components/seek'
import Xwzx from '@/components/xwzx/Xwzx'
import Xwxq from '@/components/xwzx/Xwxq'
import 'mint-ui/lib/style.css'
import { Button, Header, Tabbar, TabItem, Swipe, SwipeItem  } from 'mint-ui'
Vue.component(Button.name, Button)
Vue.component(Header.name, Header)
Vue.component(Tabbar.name, Tabbar);
Vue.component(TabItem.name, TabItem);
Vue.component(Swipe.name, Swipe);
Vue.component(SwipeItem.name, SwipeItem);
Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    },
    {
      path: '/vip',
      name: 'vip',
      component: Vip
    },
    {
      path: '/gouwuche',
      name: 'gouwuche',
      component: Gouwuche
    },
    {
      path: '/seek',
      name: 'seek',
      component: Seek
    },
    {
      path: '/xwzx',
      name: 'xwzx',
      component: Xwzx
    },
    {
      path: '/xwxq',
      name: 'xwxq',
      component: Xwxq
    },
  ]
})
