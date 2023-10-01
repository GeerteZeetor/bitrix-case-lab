window.addEventListener('load', () => {
    let count = 0;
    let is_click_reload = false;
    const quizArr = document.querySelectorAll('.quiz')
    const quizList = document.querySelectorAll('.quiz-list')
    const form = document.querySelector('.vote-form')
    const btn_submit = document.querySelector('.x')
    const modal = document.querySelector('#dialog')
    const labelArr = document.querySelectorAll('.quiz-list')
    const inputArr = document.querySelectorAll('.label-answer')

    labelArr.forEach((item) => {
        item.addEventListener('click', ev => {
            let target = ev.target;
            console.log(target)
            if(target.classList.contains('answer')) {
                for(let i = 0; i < inputArr.length; i++) {
                    console.log(inputArr[i].children[0])
                    inputArr[i].children[0].parentElement.classList.remove('checked');
                }
                target.parentElement.classList.add('checked');
            }
        })
    })

    btn_submit.addEventListener('click', () => {
        is_click_reload = true
    })

    window.onbeforeunload = function () {
       return is_click_reload ? null : true
    }

    quizList.forEach((value) => {
        value.addEventListener('change', () => {
            value.nextElementSibling.removeAttribute('disabled')
            value.nextElementSibling.classList.remove('button-disable')
        })
    })

    const quizRecStyleChange = function () {
        quizArr.forEach((value, key) => {
            value.classList.add('opacity-quiz')
            form.classList.remove('quiz-vote-form');
            if (count == key) {
                value.classList.remove('opacity-quiz')
                value.children.item(2).classList.add('button-disable')
                value.children.item(2).setAttribute('disabled', '')
                value.children.item(2).addEventListener('click', (ev) => {
                    ev.preventDefault()
                    count++
                    form.classList.add('quiz-vote-form');
                    setTimeout(() => {
                        quizRecStyleChange()
                    }, 500)
                })
            }
        })
        if (count > quizArr.length -1) {
            window.dialog.showModal()
            document.querySelector('body').style.overflow = 'hidden'
            modal.classList.add('open')
        }
    }
    quizRecStyleChange()
})
