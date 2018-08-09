<style>
li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}


li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
<nav class="navbar navbar-expand navbar-dark" style="background-color: #7a88a0;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample02">
      <ul class="navbar-nav mr-auto">
        <li class="dropdown">
            <a href="javascript:void(0)" class="nav-link">Volunteer Filter</a>
            <div class="dropdown-content">
              <a href="/filter?title=Approved/Pending Approval">Approved/Pending </a>
              <a href="/filter?title=Approved">Approved</a>
              <a href="/filter?title=Pending Approval">Pending Approval</a>
              <a href="/filter?title=Disapproved">Disapproved</a>
              <a href="/filter?title=Inactive">Inactive</a>
              <a href="/volunteers">All</a>
            </div>
        </li>
        <li class="nav-item">
         <a class="nav-link" href="/volunteers">View Opportunity Matches</a>
        </li>
        <li class="nav-item">
                <a class="nav-link" href="/volunteers/create">Add Volunteer</a>
        </li>       
        </ul>
        <form class="form-inline my-2 my-md-0 nav" role="search" method="get" action="{{url("/search")}}">
            <div class="input-group">
                <input type="text" class="form-control mr-sm-2" placeholder="Search" name="title">
                <div class="input-group-btn">
                    <button class="btn btn-success my-2 my-sm-0" type="submit"><i class="glyphicon glyphicon-search"></i>Search</button>
                </div>
            </div>
        </form>  
    </div>
</nav>