<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
/* @var $this yii\web\View 
$this->title = 'Photharam Web Service'; */
?>
<div class="site-index">
    <div class="jumbotron">
        <h1>รายงานอุบัติเหตุทางถนน </h1>
        <p class="lead">Investigation Accident Report</p>
    </div>
    <div class="body-content">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="box box-info">
                    <div class="box-header with-border">
		                <h3 class="box-title"><i class="fa fa-bar-chart" aria-hidden="true"></i> ระบบสารสนเทศการเฝ้าระวังการบาดเจ็บ | Injury Surveillance </h3>
		            </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <div class="box box-default">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Bar Chart</h3>
                                    </div>
                                    <div class="box-body">
                                    <div class="chart">
                                        <canvas id="barChart" style="height:230px"></canvas>
                                    </div>
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-xs-12"> 
                                <h3 class="box-title" align="left"> 
                                    <i class="fa fa-pie-chart" aria-hidden="true"></i> ลักษณะของผู้ประสบเหตุ 
                                </h3>
                                <div class="row">
                                    <div class="col-md-6 col-xs-6">
                                        <div class ="small-box bg-orange-active">
                                            <div class = "inner">
                                                <h3>251</h3>
                                                <p>จำนวนผู้บาดเจ็บ</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-wheelchair" aria-hidden="true"></i>
                                            </div>
                                            <a href="#" class="small-box-footer">
                                                รายละเอียด เพิ่มเติม
                                                <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                            </a>
                                        </div>    
                                    </div>
                                    <div class="col-md-6 col-xs-6">
                                        <div class ="small-box bg-red-active">
                                            <div class = "inner">
                                                <h3>4</h3>
                                                <p>จำนวนผู้เสียชีวิต</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-universal-access" aria-hidden="true"></i>
                                            </div>
                                            <a href="#" class="small-box-footer">
                                                รายละเอียด เพิ่มเติม
                                                <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                            </a>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <h3 class="box-title" align="left"> 
                                    <i class="fa fa-users" aria-hidden="true"></i> ประเภทผู้บาดเจ็บ 
                                </h3>
                                <div class = "row">
                                    <div class="col-md-4 col-xs-12">
                                        <div class="info-box bg-aqua">
                                        <span class="info-box-icon"><i class="fa fa-car" aria-hidden="true"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">ผู้ขับขี่</span>
                                                <span class="info-box-number">12 ราย</span>
                                                <div class="progress">
                                                <div class="progress-bar" style="width: 70%"></div>
                                                </div>
                                                <span class="progress-description">
                                                70% ของคนไข้ทั้งหมด
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <div class="info-box bg-aqua">
                                        <span class="info-box-icon"><i class="fa fa-bus" aria-hidden="true"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">ผู้โดยสาร</span>
                                                <span class="info-box-number">28 ราย</span>
                                                <div class="progress">
                                                <div class="progress-bar" style="width: 30%"></div>
                                                </div>
                                                <span class="progress-description">
                                                30% ของคนไข้ทั้งหมด
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <div class="info-box bg-aqua">
                                        <span class="info-box-icon"><i class="fa fa-blind" aria-hidden="true"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">คนเดินเท้า</span>
                                                <span class="info-box-number">1 ราย</span>
                                                <div class="progress">
                                                <div class="progress-bar" style="width: 5%"></div>
                                                </div>
                                                <span class="progress-description">
                                                5% ของคนไข้ทั้งหมด
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <div class="info-box bg-aqua">
                                        <span class="info-box-icon"><i class="fa fa-commenting-o" aria-hidden="true"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">อื่นๆ</span>
                                                <span class="info-box-number">10 ราย</span>
                                                <div class="progress">
                                                <div class="progress-bar" style="width: 20%"></div>
                                                </div>
                                                <span class="progress-description">
                                                20% ของคนไข้ทั้งหมด
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <div class="info-box bg-aqua">
                                        <span class="info-box-icon"><i class="fa fa-question-circle-o" aria-hidden="true"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">ไม่ทราบ</span>
                                                <span class="info-box-number">15 ราย</span>
                                                <div class="progress">
                                                <div class="progress-bar" style="width: 30%"></div>
                                                </div>
                                                <span class="progress-description">
                                                30% ของคนไข้ทั้งหมด
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <div class="info-box bg-aqua">
                                        <span class="info-box-icon">
                                            <i class="fa fa-users" aria-hidden="true"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">คนไข้ทั้งหมด</span>
                                                <span class="info-box-number">1250 ราย</span>
                                                <div class="progress">
                                                <div class="progress-bar" style="width: 100%"></div>
                                                </div>
                                                <span class="progress-description">
                                                    <a href="#">ข้อมูลเพิ่มเติม <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <div class="row">
                                    <div class="col-md-6 col-xs-12">
                                        <h3 class="box-title" align="left"> 
                                            <i class="fa fa-bolt" aria-hidden="true"></i> ปัจจัยเสี่ยง 
                                        </h3>
                                        <div class="row">
                                            <div class="col-md-6 col-xs-12">
                                                <div class ="small-box bg-red-active">
                                                    <div class = "inner">
                                                        <h3>23</h3>
                                                        <p>ดื่มแอลกอฮอล์</p>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="fa fa-beer" aria-hidden="true"></i>
                                                    </div>
                                                    <a href="#" class="small-box-footer">
                                                        รายละเอียด เพิ่มเติม
                                                        <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xs-12">
                                                <div class ="small-box bg-red-active">
                                                    <div class = "inner">
                                                        <h3>3</h3>
                                                        <p>ใช้สารเสพติด</p>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="fa fa-eyedropper" aria-hidden="true"></i>
                                                    </div>
                                                    <a href="#" class="small-box-footer">
                                                        รายละเอียด เพิ่มเติม
                                                        <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div> 
                                        </div>          
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <h3 class="box-title" align="left"> 
                                            <i class="fa fa-shield" aria-hidden="true"></i> การป้องกัน 
                                        </h3>  
                                        <div class="row">
                                            <div class="col-md-6 col-xs-12">
                                                <div class ="small-box bg-green-active">
                                                    <div class = "inner">
                                                        <h3>18</h3>
                                                        <p>การคาดเข็มขัดนิรภัย</p>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                                    </div>
                                                    <a href="#" class="small-box-footer">
                                                        รายละเอียด เพิ่มเติม
                                                        <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xs-12">
                                                <div class ="small-box bg-green-active">
                                                    <div class = "inner">
                                                        <h3>33</h3>
                                                        <p>การสวมหมวกนิรภัย</p>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                                    </div>
                                                    <a href="#" class="small-box-footer">
                                                        รายละเอียด เพิ่มเติม
                                                        <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div> 
                                        </div>      
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                    <div class="box-footer">
		                <button type="submit" class="btn btn-info btn-flat">ค้นหาวันนัดหมาย</button>
		            </div>
                </div>
            </div>
        </div>
    </div>
</div>
