<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Ecum</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('about.index')); ?>">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Programs
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?php echo e(route('civic-education.index')); ?>">Civic Education</a>
                            <a class="dropdown-item" href="/youth-empowerment">Youth Empowerment</a>
                            <a class="dropdown-item" href="/women-empowerment">Women Empowerment</a>
                            <a class="dropdown-item" href="/religious-workshops">Inter Religious Workshops</a>
                            <a class="dropdown-item" href="/economic-empowerment">Economic Empowerment</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Trustees</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/our-partners">Our Partners</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/testimonials">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/gallery">Gallery</a>
                    </li>
                   
                </ul>
            </div>
        </div>
    </nav>
</header><?php /**PATH C:\xampp\htdocs\peter\resources\views/layouts/header.blade.php ENDPATH**/ ?>