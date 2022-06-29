<?php if($this->session->flashdata('error')){ ?>
									<div class="alert alert-danger alert-bordered">
										<button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
										<span class="text-semibold">Error !</span>  <?php echo $this->session->flashdata('error');?>
								    </div>
                                <?php
							$this->session->unset_userdata('error');
							} ?>
                                <?php if($this->session->flashdata('success')){ ?>
									<div class="alert alert-success alert-bordered">
										<button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
										<span class="text-semibold">Success!</span> <?php echo $this->session->flashdata('success');?>
								    </div>
                                <?php 
							$this->session->unset_userdata('success');
							} ?>