
/*点击切换文字 */
function change(ul1, ul2, ba1, ba2) {
    var oUl1 = document.getElementById(ul1);
    var oUl2 = document.getElementById(ul2);
    var oBa1 = document.getElementById(ba1);
    var oBa2 = document.getElementById(ba2);

    var aLi2 = document.getElementsByTagName('li');

    oBa1.style.color = '#333';
    for (var t = 0; t < aLi2.length; t++) {
        oBa2.onclick = function () {
            oBa2.style.color = '#333';
            oUl1.style.display = "none";
            oBa1.style.color = '#898989';
            oUl2.style.display = "block";
        }
        oBa1.onclick = function () {
            oBa2.style.color = '#898989';
            oUl1.style.display = "block";
            oBa1.style.color = '#333';
            oUl2.style.display = "none";
        }
    }
}
change('ul1', 'ul2', 'ba1', 'ba2');
change('ul11', 'ul21', 'ba11', 'ba21');
change('ul12', 'ul22', 'ba12', 'ba22');


/*map*/
var oMapb = document.getElementById('mapb');
var oMapul = document.getElementById('mapul');
var onOff = true;

oMapb.onclick = function () {
    if (onOff) {
        oMapul.style.display = 'block';
        onOff = false;
    }
    else {

        oMapul.style.display = 'none';
        onOff = true;
    }
}

/*定时器轮播 */

var oDiv = document.getElementById('banner');
var oImg = document.getElementById('img');
var oUl = document.getElementById('ul');
var aLi = document.getElementsByTagName('li');
var aA = oUl.getElementsByTagName('a');
var aSpan = oUl.getElementsByTagName('span');
var arr = ['img/bg0.jpg', 'img/bg1.jpg', 'img/bg2.jpg', 'img/bg3.jpg']
var num = 0;
oImg.src = arr[0];
aSpan[0].style.display = 'block';
aA[0].style.color = "#000";
for (var i = 0; i < arr.length; i++) {
    (function (j) {
        aA[j].onclick = function () {
            oImg.src = arr[j];
            for (var k = 0; k < arr.length; k++) {
                aSpan[k].style.display = 'none';
                aA[k].style.color = "#89899b";
            }
            aSpan[j].style.display = 'block';
            aA[j].style.color = "#000";
            num = j;
        }
    })(i)
}

timer = setInterval(function () {
    num++;
    if (num == arr.length) { num = 0; }
    oImg.src = arr[num];
    for (var k = 0; k < arr.length; k++) {
        aSpan[k].style.display = 'none';
        aA[k].style.color = "#89899b";
    }
    aSpan[num].style.display = 'block';
    aA[num].style.color = "#000";
}, 3000)

oDiv.onmouseover = function () {
    clearInterval(timer);
}
oDiv.onmouseout = function () {
    timer = setInterval(function () {
        num++;
        if (num == arr.length) { num = 0; }
        oImg.src = arr[num];
        for (var k = 0; k < arr.length; k++) {
            aSpan[k].style.display = 'none';
            aA[k].style.color = "#89899b";
        }
        aSpan[num].style.display = 'block';
        aA[num].style.color = "#000";
    }, 3000)
}





/*重要im */
var oBtn1 = document.getElementById('btn1');
var oBtn2 = document.getElementById('btn2')
var oImul = document.getElementById('imul')
var oImult = document.getElementById('imult')
var aIli = document.getElementsByTagName('li')
var on = true;
oBtn2.onclick = function () {

    oImul.style.display = "none";
    oImult.style.display = "block";
    on = !on
}

oBtn1.onclick = function () {
    oImul.style.display = "block";
    oImult.style.display = "none";
    on = !on
}


/*银行卡 */
var oP = document.getElementById('p');
var oP1 = document.getElementById('p1');
var oP2 = document.getElementById('p2');
var aPli = oP.getElementsByTagName('li');

var m = 0;

function aa() {
    for (var p = 0; p < aPli.length; p++) {
        aPli[p].style.display = 'none';
    }
    aPli[m].style.display = 'block';
}
aa();

oP2.onclick = function () {
    m++;
    if (m == aPli.length) { m = aPli.length - 1 }
    aa();

}

oP1.onclick = function () {
    m--;
    if (m == -1) { m = 0 }
    aa();
}




var oPrul = document.getElementById('pRul');
var aPrLi = oPrul.getElementsByTagName('li');
var aPrA = oPrul.getElementsByTagName('a');

var oprax = document.getElementById('prax');
var oprax1 = document.getElementById('prax1');
var oprax2 = document.getElementById('prax2')
var oprax3 = document.getElementById('prax3')

function sb() {
    oprax.style.display = 'none';
    oprax1.style.display = 'none';
    oprax2.style.display = 'none';
    oprax3.style.display = 'none';
}

function bb() {
    for (var o = 0; o < 3; o++) {
        aPrA[o].style.color = '#898989';
        aPrA[o].style.fontSize = '16px';
    }
}
aPrA[0].style.color = '#000';
aPrA[0].style.fontSize = '18px';


sb();
oprax.style.display = 'block';

aPrA[0].onclick = function () {
    sb();
    bb();
    oprax.style.display = 'block';
    aPrA[0].style.color = '#000';
    aPrA[0].style.fontSize = '18px';
}

aPrA[1].onclick = function () {
    sb();
    bb();
    oprax1.style.display = 'block';
    aPrA[1].style.color = '#000';
    aPrA[1].style.fontSize = '18px';
}

aPrA[2].onclick = function () {
    sb();
    bb();
    oprax2.style.display = 'block';
    aPrA[2].style.color = '#000';
    aPrA[2].style.fontSize = '18px';
}

aPrA[3].onclick = function () {
    sb();
    bb();
    oprax3.style.display = 'block';
    aPrA[3].style.color = '#000';
    aPrA[3].style.fontSize = '18px';
}



