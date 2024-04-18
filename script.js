const wrapper=document.querySelector('.wrapper');
const registerlink=document.querySelector('.register-link');
const loginlink=document.querySelector('.login-link');
const btnpopup=document.querySelector('.btnLogin-popup');
const iconclose=document.querySelector('.icon-close');

registerlink.onclick= () =>{
    wrapper.classList.add('active');
};
loginlink.onclick= () =>{
    wrapper.classList.remove('active');
};

btnpopup.onclick= () =>{
    wrapper.classList.add('active-popup');
};

iconclose.onclick= () =>{
    wrapper.classList.remove('active-popup');
    wrapper.classList.remove('active');

};