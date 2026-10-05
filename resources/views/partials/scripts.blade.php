<script src="{{ asset('js/data.js') }}"></script>
<script src="{{ asset('js/validation.js') }}"></script>
<script src="{{ asset('js/auth.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

@stack('page-scripts')

<script>
  const currentUser = JSON.parse(localStorage.getItem('currentUser') || 'null');
  const profileLink = document.getElementById('profileLink');
  const mobileProfileLink = document.getElementById('mobileProfileLink');

  if (currentUser && profileLink) {
    profileLink.style.display = 'block';
    if (mobileProfileLink) mobileProfileLink.style.display = 'block';
  } else {
    if (profileLink) profileLink.style.display = 'none';
    if (mobileProfileLink) mobileProfileLink.style.display = 'none';
  }
</script>