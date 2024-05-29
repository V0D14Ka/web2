var count = true
document.getElementById("myButton").onclick = function () {
    if (count == false) {
        //close image
        count = true
        document.getElementById("demo").innerHTML = ""
        return
    }
    //open image
    count = false
    var img = document.createElement('img')
    img.src = "https://masterpiecer-images.s3.yandex.net/9deed7d06f1811eebd65b646b2a0ffc1:upscaled"
    img.classList = "img1"
    document.getElementById("demo").appendChild(img)
}