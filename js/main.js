let imgs = document.querySelectorAll('.left .img_hover');

imgs.forEach(element => {
    element.addEventListener('click', (e) => {
        let id = e.target.getAttribute('id');
        axios({
            method: 'post',
            url: './api/add_img.php',
            data: { id: id }
        }).then(f5())
        
    });
});

function removeItem(id) {
    axios({
        method: 'post',
        url: './api/remove_cart.php',
        data: { id: id }
    }).then(f5());
}
function f5() {
    axios({
        method: 'get',
        url: './api/render_cart.php',
    }).then((res) => {
        document.querySelector('.right').innerHTML = res.data;
    });
}

f5();