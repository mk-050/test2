
document.write("問1" + "<br>");


//問1課題
for (var star = 1; star <= 5; star++) {
    document.write("★");
}

document.write("<br>" + "<br>");
document.write("問2" + "<br>");


//問2課題
for (var star = 1; star <= 2; star++) {
    for (var star2 = 1; star2 <= 3; star2++) {
        document.write("★");
    }
    document.write("<br>");
}


document.write("<br>");
document.write("問3" + "<br>");


//問3課題
for (var star = 1; star <= 2; star++) {
    for (star2 = 1; star2 <= 5; star2++) {
        document.write("☆");
    }
    document.write("<br>");
}


document.write("<br>");
document.write("問4" + "<br>");


//問4課題
for (var star = 1; star <= 4; star++) {
    for (var star2 = 1; star2 <= 5; star2++) {
        document.write("★");
    }
    document.write("<br>");
}

document.write("<br>");
document.write("問5" + "<br>");


//問５課題
for (var star = 1; star <= 4; star++) {
    for (var star2 = 1; star2 <= 3; star2++) {
        document.write("★");
    }
    document.write("<br>");
}

document.write("<br>");
document.write("問6" + "<br>");


//問6課題
for (var star = 1; star <= 3; star++) {
    for (var star2 = 1; star2 <= 3; star2++) {
        if (star2 % 2 == 0) {
            document.write("☆");
        } else {
            document.write("★");
        }
    }
    document.write("<br>");
}


document.write("<br>");
document.write("問7" + "<br>");


//問7課題
for (var star = 1; star <= 4; star++) {
    for (var star2 = 1; star2 <= 5; star2++) {
        if (star2 % 2 == 0) {
            document.write("☆");
        } else {
            document.write("★");
        }
    }
    document.write("<br>");
}


document.write("<br>");
document.write("問8" + "<br>");


//問8課題
for (star = 1; star <= 5; star++) {
    for (star2 = 1; star2 < star + 1; star2++) {
        document.write("★");
    }
    document.write("<br>");
}