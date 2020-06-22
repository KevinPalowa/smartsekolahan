const flashData = $('.flash-data').data('flashdata');

if (flashData) {
	Swal.fire({
		icon: 'success',
		title: 'Success...',
		text: flashData,
	})
}
$('.tombol-hapus').on('click', function (e) {
	e.preventDefault();
	const href = $(this).attr('href');

	Swal.fire({
		title: 'Are you sure?',
		text: "Menu data will deleted!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yes, delete it!'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;

		}
	})
})
