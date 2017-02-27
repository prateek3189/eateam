<asside>
    <ul class="left-menu">
        <li>
          <a href="<?php echo FOLDER_PATH_HTTP.'index.php'?>">
              <i class="icon-home"></i>
              <span>Home</span>
          </a>
        </li>
        <li>
          <a href="#">
              <i class="icon-gallery"></i>
              <span>Gallery</span>
          </a>
        </li>
        <li>
            <a href="#">
                <i class="icon-travel"></i>
                <span>Travel India</span>
            </a>
        </li>
        <?php if($_SESSION['login']) { ?>
        <li>
          <a href="#">
              <i class="icon-exp"></i>
              <span>Expense Manager</span>
          </a>
        </li>
        <li>
          <a href="#">
              <i class="icon-goals"></i>
              <span>Goals</span>
          </a>
        </li>
        <li>
          <a href="#">
              <i class="icon-achv"></i>
              <span>Achievements</span>
          </a>
        </li>
        <?php } ?>
        <li>
          <a href="#">
              <i class="icon-setting"></i>
              <span>Admin</span>
          </a>
        </li>
        <li>
          <a href="#">
              <i class="icon-about"></i>
              <span>About Us</span>
          </a>
        </li>
    </ul>
</asside>
