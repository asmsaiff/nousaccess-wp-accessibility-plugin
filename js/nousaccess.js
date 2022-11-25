window.addEventListener('DOMContentLoaded', (event) => {
    // Accessibility
    const openAccessibility = document.getElementById('open-accessibility')
    const accessibilityButtons = document.querySelector('#accessibility .accessibility-buttons')

    openAccessibility.addEventListener('click', e => {
        accessibilityButtons.classList.toggle('open')
        openAccessibility.classList.toggle('position-absolute')
    })

    if(localStorage.getItem('accessibility-class') !== '') {
        document.body.classList.add(localStorage.getItem('accessibility-class'))
    }

    // Set class to reading guide
    function getAccessibilityClass(c) {
        if(c) {
            document.body.classList.toggle(c)

            if(!document.body.classList.contains(c)) {
                localStorage.setItem('accessibility-class', '')
            }
        }
    }

    // Monochrome
    document.getElementById('monochrome').addEventListener('click', e => {
        localStorage.setItem('accessibility-class', 'contrast')
        getAccessibilityClass(localStorage.getItem('accessibility-class'))
    })

    // Invert Color
    document.getElementById('invertColor').addEventListener('click', e => {
        localStorage.setItem('accessibility-class', 'darkmode')
        getAccessibilityClass(localStorage.getItem('accessibility-class'))
    })

    // Big Cursor
    document.getElementById('cursormode').addEventListener('click', e => {
        localStorage.setItem('accessibility-class', 'cursormode')
        getAccessibilityClass(localStorage.getItem('accessibility-class'))
    })

    // Link Focus
    document.getElementById('linkmode').addEventListener('click', e => {
        localStorage.setItem('accessibility-class', 'linkmode')
        getAccessibilityClass(localStorage.getItem('accessibility-class'))
    })

    // Heading Highlight
    document.getElementById('headingmode').addEventListener('click', e => {
        localStorage.setItem('accessibility-class', 'headingmode')
        getAccessibilityClass(localStorage.getItem('accessibility-class'))
    })

    // Reading Guide Line Move
    document.getElementById('readingguide').addEventListener('click', e => {
        document.getElementById('reading-guide').classList.toggle('d-none')
    })
    // Move LINE on Mouse Position
    window.addEventListener('mousemove', e => {
        var y = e.pageY;
        document.getElementById('reading-guide').style.transform = "translateY(" + y + "px)"
    }, false)

    // Reset Accessibility
    document.getElementById('resetClass').addEventListener('click', e => {
        document.getElementById('reading-guide').classList.add('d-none')
        document.body.classList.remove(localStorage.getItem('accessibility-class'))
        localStorage.setItem('accessibility-class', '')
        getAccessibilityClass(localStorage.getItem('accessibility-class'))
    })
});

window.addEventListener('load', () => {
    // Add class to all tags
    var elems = document.getElementsByTagName("*");

    for(const props in elems) {
        elems[props].className += " accessibility-plugin-ac"
    }

    function ObterTamanhoFonte(seletorComClasseAcessibilidade) {
        let tamanho = window.getComputedStyle(seletorComClasseAcessibilidade, null)
                        .getPropertyValue('font-size');
        return parseFloat(tamanho);
    }

    function ControlaTamanhoElementos(seletoresComClasseAcessibilidade, aumentar, normal)
    {
        for (let i = 0; i < seletoresComClasseAcessibilidade.length; i++) {
            const element = seletoresComClasseAcessibilidade[i];      
            let fontSizeAtual = 0;

            if (normal)
            {
                element.style.fontSize = '1em';
            }
            else
            {        
                if (aumentar)
                    fontSizeAtual = ObterTamanhoFonte(element) + 1;
                else
                    fontSizeAtual = ObterTamanhoFonte(element) - 1;

                element.style.fontSize = fontSizeAtual.toString() + 'px'; 
            }
        } 
    }

    document.querySelector('#increase-plugin-ac').addEventListener('click', e => {
        let acessibilidade = document.getElementsByClassName('accessibility-plugin-ac');
        ControlaTamanhoElementos(acessibilidade, true);
    });

    // document.querySelector('#normal-plugin-ac').addEventListener('click', e => {
    //     let acessibilidade = document.getElementsByClassName('accessibility-plugin-ac');
    //     ControlaTamanhoElementos(acessibilidade, null, true);
    // });

    document.querySelector('#decrease-plugin-ac').addEventListener('click', e => {
        let acessibilidade = document.getElementsByClassName('accessibility-plugin-ac');
        ControlaTamanhoElementos(acessibilidade, false);
    });
});