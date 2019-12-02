<?php include "header-kb.php" ?>

<div class="outerWrap innerbanner-dubai-pages">
    <h1 class="innerHead">Practice Areas</h1>
    <div class="bedcrum">
        <div class="container text-right">
            <a href="./">home</a>    Practice Areas
        </div>
    </div>
</div>

<div class="outerWrap innerBody">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="leftPanel">
                        <ul class="practiceLeftMenu">
                            <li>
                                <ul>
                                    <li class="active"><a href="">Litigation and Dispute Resolution</a></li>
                                    <li><a href="">Arbitration and Mediation</a></li>
                                    <li><a href="">Banking and Finance Advisory</a></li>
                                    <li><a href="">Corporate and Commercial</a></li>
                                    <li><a href="">Personal Status and Estate Planning</a></li>
                                    <li><a href="">Employment Law</a></li>
                                    <li><a href="">Construction Law</a></li>
                                    <li><a href="">Real Estate</a></li>
                                    <li><a href="">Criminal Law</a></li>
                                    <li><a href="">Intellectual Property and Technology</a></li>
                                </ul>
                            </li>

                        </ul>

                        <div class="hamburger">
                            <span class="h_menu">More Links</span>
                            <span class="h-top"></span>
                            <span class="h-middle"></span>
                            <span class="h-bottom"></span>
                        </div>

                        <script>
                            $(document).ready(function() {
                                $(".hamburger").click(function(event) {
                                    $(this).toggleClass('h-active');
                                    $(".practiceLeftMenu").toggleClass('slidenav');
                                });
                            });
                        </script>
                    </div>
                </div>
                <div class="col-md-9">

                    <h3>Litigation and Dispute Resolution</h3>
                    <div class="clr height10"></div>
                    <ul>
                        <li>Advice on business structuring, restructuring, and reorganization of the legal and beneficial ownership of UAE companies, management and operational structuring from the UAE legal perspective.</li>

                        <li>We advise companies, creditors, sponsors, boards of directors, acquirers and other interested parties involved in complex distressed situations. </li>

                        <li>We formulate and assist in negotiating and advising commercial, transactional and trans-national documentation. This includes business acquisitions and disposals, local/regional joint ventures, privatizations, mergers, private placements, private equity investment, buy-outs, import/export documentation, escrow arrangements, capital goods purchase, and other commercial agreements.</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>


<script>
	$(document).ready(function() {
		$('.eqH').responsiveEqualHeightGrid();
		$('.eq_hP').responsiveEqualHeightGrid();

	});
</script>
<?php include "footer-kb.php" ?>
