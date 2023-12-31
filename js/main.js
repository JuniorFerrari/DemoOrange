function setSession(key, data) {
    fetch('scripts/set_session.php', {
        method: "POST",
        headers: {
            "Content-type": "application/json;charset=utf-8"
        },
        body: JSON.stringify({key: key, data: data})
    });
}

function auth(url) {
    $('form').on('submit', async function (e) {
        e.preventDefault();

        const response = await fetch(url, {
            method: "POST",
            body: new FormData($('form')[0])
        })

        const data = await response.json();


        if (data.errors) {

            $('errorsWrapper').empty()
            data.errors.forEach(error => {
                const alert = `
                <div class="alert alert-danger w-50" role="alert">
                    ${error}
                </div>
                `

                $('errorsWrapper')[0].insertAdjacentHTML('afterbegin', alert)
            })
            return

        }

        setSession('user', data.user)
        window.location = 'account.php'
    })
}

async function getProducts() {
    const response = await fetch('/scripts/get_products.php', {
        method: "POST",
        body: new FormData($('form')[0])
    })
    const products = await response.json()

    $('#productsWrapper').empty()
    products.forEach(product => {
        const card = `<div class="col">
                            <div class="card h-100" data-id="${product.id}">
                                <img src="img/${product.img}.jpg" class="card-img-top" alt="Картинка первого популярного предложения">
                                <div class="card-body">
                                    <a href="catalog.php?category=${product.category_id}" class="card-text mb-1 text-decoration-none text-reset fw-medium">${product.category}</a>
                                    <div>
                                        <a href="#" class="card-title fs-5 text-decoration-none fw-medium">${product.title}</a>
                                    </div>
                                    <h4 class="mb-3">${product.price}Р</h4>
                                    <button class="basket-button btn btn-primary custom-bg">В корзину</button>
                                </div>
                            </div>
                        </div>`


        $('#productsWrapper').append(card)
    })
}

async function getCart() {
    const response = await fetch('./scripts/get_cart.php')

    const products = await response.json()

    const productsWrapper = $('#cartProductsWrapper')


    productsWrapper.empty()
    products.forEach(product => {
        const card = `<div class="col">
                                    <div class="card mb-3 position-relative" data-id="${product.id}">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img src="./img/${product.img}.jpg" class="img-fluid rounded-start" alt="Картинка товара" />
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title">${product.title}</h5>
                                                    <p class="fs-3 fw-medium">${product.price} Р</p>
                                                    <form action="#" class="position-relative d-inline-flex gap-1">
                                                        <button type="button" class="count-button btn btn-primary custom-bg minus">-</button>
                                                        <input class="form-control text-center" value="${product.amount}" min="0" max="10" type="number" id="count-input">
                                                        <button type="button" class="count-button btn btn-primary custom-bg plus">+</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="close-button btn btn-outline-danger">&times;</button>
                                    </div>
                                </div>`
        productsWrapper.append(card)
    })
    const total = products.reduce((total,product) => total + product.amount*product.price, 0 )
    $('#total').text('Итог: ' + total + ' P')
}
$(function () {
    if ($('section#registration')[0]) {
        auth('scripts/ajax_reg.php')
    }

    if ($('section#login')[0]) {
        auth('scripts/ajax_log.php')
    }
    if ($('section#catalog')[0]) {
        getProducts()
        $('form input[name="name"]').on('input', getProducts)
        $('form select[name="category_ids[]"]').on('change', getProducts)
        $('form select[name="order"]').on('change', getProducts)

        $('#productsWrapper').on('click',  async (e)=>{
            const target = e.target
            if (!target.classList.contains('basket-button')){
                return
            }
            const productId = target.closest('.card').dataset.id
            const response = await fetch('./scripts/add_to_basket.php',{
                method:'POST',
                headers:{
                    "Content-type":"application/json"
                },
                body: JSON.stringify({productId: productId})
            })
            const data = await response.json()
        })
    }
    if ($('section#cart')[0]){
        getCart()

        $('#cartProductsWrapper').on('click',async e =>{
            const target = e.target
            if (target.classList.contains('close-button')){
                const productId = target.closest('.card').dataset.id

                const response = await fetch('./scripts/delete_from_cart.php',{
                    method: "POST",
                    headers:{
                        "Content-Type":"application/json"
                    },
                    body: JSON.stringify({productId:productId})
                })
                const data = await response.json();

                getCart()
            }
            if (target.classList.contains('count-button')){
                const countInput = $(target).parent().find('input')


                if (target.classList.contains('minus')){
                    if (countInput.val()>1)
                        countInput.val(+countInput.val()-1)

                } else{
                    if (countInput.val()<10)
                        countInput.val(+countInput.val()+1)
                }
            }

        })

    }
})
