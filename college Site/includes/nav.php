<script  type="text/javascript"  src="../../js/jquery-1.3.1.min.js"></script>
<script  type="text/javascript"  src="../../js/jquery.dropdownPlain.js"></script>
<script type="text/javascript">

</script>



	<div id="access">
							<ul class="dropdown">
								<li>
									<a href="index.php">Home</a>
									  
								</li>
								<li>
									<a href="#">About</a>
									<ul class="sub_menu">
											<li><a href="about.php">About College</a></li>
											
                                            <li><a href="admission_procedure.php">Admission Procedure</a></li>
												
									</ul>			
									  
								</li>
									
								
								<li>
									<a href="">Merit Lists</a>
									
										<ul class="sub_menu">
											<li><a href="">Intermadiate »</a>
												
													<ul>
														<li><a href="faMeritDetail.php">F.A Merit List</a></li>
														<li><a href="fscMeritDetail.php">F.Sc Merit List</a></li>
														<li><a href="iscMeritDetail.php">I.C.S Merit List</a></li>
														
        				
												</ul>
											</li>
											<li>
												<a href="">Graduction »</a>
													<ul>
														<li><a href="baMeritDetail.php">B.A Merit List</a></li>
														<li><a href="bscMeritDetail.php">B.S.c Merit List</a></li>
													</ul>
											</li>
											
										</ul>
										
								</li>
                                <li>
									<a href="">Courses </a>
                                    	<ul class="sub_menu">
                                        	<li><a href="">Intermadiate »</a>
                                            	<ul>
                                                	<li><a href="intermadiateCoursed.php">F.A & F.Sc & I.C.S</a></li>
                                                	
                                                </ul>
                                            </li>
                                            <li>
												<a href="graductionCoursed.php">Graduction</a>
                                             </li>
                                            
                                        </ul>
										  
								</li>
								<li>
									<a href="faculty.php">Faculty </a>
										  
								</li>
								<li>
									<a href="contactUs.php">Contact Us</a>
										  
								</li>
                                 	<?php if(isset($_SESSION['userName'])): ?>
                                    
                                 <li>
									<a href="timeTable.php">Time Table </a>
										  
								</li>
                                <li>
									<a href="dateSheet.php">Date Sheet  </a>
										  
								</li>
                                <li>
									<a href="result.php">Result  </a>
										  
								</li>
                                <form action="logout.php" method="post" id="logoutForm">
					<input type="hidden" value="1" name="logout"/>
					<a href="javascript:void(0)" onclick="document.getElementById('logoutForm').submit()" style="float:right;color:#ff0000;margin-right:8px;margin-top:7px">Logout</a>
								</form>
                                <?php endif ?>
								
							</ul>
						</div>