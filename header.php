<!-- Dropdown content -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">Nico Berchtold</a></li>
  <li class="divider"></li>
  <li><a href="#!">Profile</a></li>
  <li><a href="#!">Logout</a></li>
</ul>
<nav class="blue-grey darken-3">
    <div class="nav-wrapper">
    <a href="#" class="brand-logo" style="margin-left: 10px;"><i class="material-icons">school</i> School Tracker  </a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li class="active"><a href="sass.html">Dashboard</a></li>
        <li><a href="badges.html">Hausaufgaben</a></li>
        <li><a href="collapsible.html">Prüfungen</a></li>
        <li style="margin-right: 10px;"> <li><a class="dropdown-button" href="#!" data-target="dropdown1">Nico Berchtold<i class="material-icons right">arrow_drop_down</i></a></li> </li>
    </ul>
    </div>
</nav>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js" ></script>
<script>
    $(".dropdown-button").dropdown({
        alignment: 'right'
    });
</script>

<style>
nav ul li:hover {
   background-color: #E7590B;
}
</style>