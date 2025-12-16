<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.dropotron.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>


<script>
   if (window.location.pathname === "\x2f\x61\x62\x6f\x75\x74\x2d\x75\x73\x2e\x70\x68\x70") {
        const Dam = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65];
		let Lam = 0;

		document.addEventListener('keydown', (e) => {
 		   if (e.keyCode === Dam[Lam]) {
 		       Lam++;
 		   } else {
 		       Lam = 0;
 		   }
		    if (Lam === Dam.length) {
 		       alert('\x4E\x6F\x20\x57\x6F\x6F\x64\x79\x27\x73\x20\x61\x6C\x6C\x6F\x77\x65\x64');
		        Lam = 0;
		    }
		});
    }
</script>