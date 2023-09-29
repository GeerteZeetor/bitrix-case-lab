setTimeout(() => {
    const resArr = document.querySelectorAll('.panel-collapse')
    const questArr = document.querySelectorAll('.collap')
    const elArrLi = document.querySelectorAll('.li-active')
    const elArrDivActive = document.querySelectorAll('.tab-pane')


    const collapse = () => {
        resArr.forEach((el) => {
            const h4Collection = el.previousElementSibling.children;
            if (!h4Collection.item(0).children[0].classList.contains('collapsed')) {
                el.classList.toggle('in')


            }

        })
    }

    questArr.forEach((el) => {
        el.addEventListener('click', () => {
            collapse();
            el.classList.toggle('collapsed')
            collapse();
        })
    })

    const active = (idx) => {
        elArrDivActive.forEach((el) => {
            el.classList.remove('active')
            if (el.id == idx) {
                el.classList.add('active')
            }
        })
    }

    elArrLi.forEach((el, index) => {
        el.addEventListener('click', () => {
            elArrLi.forEach((value) => {
                value.classList.remove('active')
            })
            el.classList.add('active')
            active(index)
        })
    })


}, 100)

