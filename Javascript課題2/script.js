document.write("問1" + "<br>");


//円の面積＝半径×半径×円周率

//円の面積＝circleArea
//半径＝radius
//円周率＝pi 

function circleArea(radius) {
    return "半径" + radius + "cmの円の面積は、" + (radius * radius * 3.14) + "㎠です。<br>";
}

document.write(circleArea(5));
document.write(circleArea(7));
document.write(circleArea(10));


document.write("<br>" + "問2" + "<br>");



//料金の合計金額＝(大人の人数×大人料金)＋(子供の人数×子供料金)

//大人の人数＝adult
//子供の人数＝child

function totalPrice(group, adult, child) {
    return group + "グループの合計金額は、" + (adult * 500 + child * 200) +"円です。<br>";
}

document.write(totalPrice("A",2, 4));
document.write(totalPrice("B",1, 5));
document.write(totalPrice("C",3, 7));