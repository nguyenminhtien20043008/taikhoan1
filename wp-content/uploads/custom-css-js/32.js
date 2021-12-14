<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
/* Default comment here */ 


window.addEventListener("scroll", function () {
    const header = document.querySelector('header');
    header.classList.toggle("sticky", window.scrollY > 0);
});
window.onload = function(){ 
   const toggle = document.querySelector('#toggle-id-custom-header');
const nav = document.querySelector('#nav-id-custom-header');
toggle.onclick = function () {
    this.classList.toggle('active');
    nav.classList.toggle('active');
};

};</script>
<!-- end Simple Custom CSS and JS -->
