<!-- jQuery (only once) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- AOS & GLightbox -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.2.0/js/glightbox.min.js"></script>

<script>
    AOS.init();
    const lightbox = GLightbox({ selector: '.glightbox' });
</script>

<!-- Spline Viewer -->
<script type="module" src="https://unpkg.com/@splinetool/viewer@1.10.2/build/spline-viewer.js"></script>

<!-- JS Libraries -->
<script src="{{ asset('lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

<!-- Your script -->
<script src="{{ asset('js/new.js') }}"></script>


</body>
</html>