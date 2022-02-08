<div class="footer">
    <div class="footer-copy">
        <div class="container">
            <p>© <?php
                $startYear = 2020;
                $thisYear = date('Y');
                if ($startYear == $thisYear) {
                    echo $thisYear;
                } else {
                    echo "{$startYear}&ndash;{$thisYear}";
                }
                echo ' ' . $title?> Все права защищены</p>
        </div>
    </div>

    <div class="footer-botm">
        <div class="container">
            <div class="layouts-foot">
                <ul>
                    <li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<script type="text/javascript" src="js/jquery-3.5.1.js"></script>
<script type="text/javascript" src="js/admin.js"></script>
</body>
</html>
