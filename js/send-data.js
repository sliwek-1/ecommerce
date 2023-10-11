window.addEventListener('DOMContentLoaded', () => {
    main();
})

function main(){
    let btns = document.querySelectorAll('.btn');

    btns.forEach(btn =>{
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            let currentClicked = e.target.parentElement;
            let typeForm = currentClicked.classList[0];

            switch(typeForm){
                case 'register-form':
                    register();
                    break;
                case 'login-form':
                    login();
                    break;
                default:
                    console.log("Błędna akcja");
            }
        })
    })
    
}

async function register(){
    try{
        let request = await fetch('php/register.php');
    }catch(error){
        console.log(error);
    }
}

async function login(){
    try{
        let request = await fetch('php/login.php');
    }catch(error){
        console.log(error);
    }
}