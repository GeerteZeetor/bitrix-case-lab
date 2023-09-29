window.addEventListener('load', () => {
    let count = 0;
    const quizArr = document.querySelectorAll('.quiz')
    const quizList = document.querySelectorAll('.quiz-list')
    const form = document.querySelector('.vote-form')
    const modal = document.querySelector('#dialog')

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
        if (count > 2) {
            window.dialog.showModal()
            modal.classList.add('open')
        }
    }
    quizRecStyleChange()
})
