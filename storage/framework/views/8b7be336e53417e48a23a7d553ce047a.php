<h1>ini hALAMAN OURETAM KAYAKNYAS</h1>

<section class="slider">
    <p style="font-size: 4rem;
    text-align: center;
    justify-content: center;
    color: var(--white);
    text-transform: uppercase;
    font-weight: bolder;
    margin-bottom: 3rem;">OUR TEAM</p>
    <div class="wrapper">
        <i id="left" class="fa-solid fa-angle-left"></i>
        <div class="carousel">
            <img src="<?php echo e(Vite::asset('resources/images/about_us/profile1.png')); ?>" alt="img" draggable="false">
            <img src="<?php echo e(Vite::asset('resources/images/about_us/profile11.png')); ?>" alt="img" draggable="false">
            <img src="<?php echo e(Vite::asset('resources/images/about_us/profile12.png')); ?>" alt="img" draggable="false">
            <img src="<?php echo e(Vite::asset('resources/images/about_us/profile13.png')); ?>" alt="img" draggable="false">
            <img src="<?php echo e(Vite::asset('resources/images/about_us/profile14.png')); ?>" alt="img" draggable="false">
            <img src="<?php echo e(Vite::asset('resources/images/about_us/profile15.png')); ?>" alt="img" draggable="false">
            

        </div>
        <i id="right" class="fa-solid fa-angle-right"></i>
      </div>
</section>

<?php $__env->startPush('scripts'); ?>
<script type="module">

const carousel = document.querySelector(".carousel"), //container dari slider 
firstImg = carousel.querySelectorAll("img")[0],
arrowIcons = document.querySelectorAll(".wrapper i"); //wrapp kumpulan dari image 
let isDragStart = true, isDragging = true, prevPageX, prevScrollLeft, positionDiff;
const showHideIcons = () => {
    // menampilkan dan menyembunyikan ikon prev/next sesuai dengan nilai carousel scroll left
    let scrollWidth = carousel.scrollWidth - carousel.clientWidth; // getting max scrollable width
    arrowIcons[0].style.display = carousel.scrollLeft == 0 ? "none" : "block";
    arrowIcons[1].style.display = carousel.scrollLeft == scrollWidth ? "none" : "block";
}
arrowIcons.forEach(icon => {
    icon.addEventListener("click", () => {
        let firstImgWidth = firstImg.clientWidth + 1; 
        carousel.scrollLeft += icon.id == "left" ? -firstImgWidth : firstImgWidth;
        setTimeout(() => showHideIcons(), 60); // memanggil showHideIcons setelah 60ms
    });
});
</script>

<?php $__env->stopPush(); ?> --}}
<?php /**PATH C:\Users\User\Documents\frame\UAS_Framework\resources\views/ourteam.blade.php ENDPATH**/ ?>