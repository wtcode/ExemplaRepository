<div style="background-color:#DBE5F0; width:100%; border-bottom:1px solid #FFF;"> 
        <div class="banners">
        
                    <div class="blocoSlide">
                        
                        <div class="container">
                            <div class="featured"> 
                           <?php
        
                           $sql = "select * from banner where estatus = 2";
                
                            $result = mysql_query($sql);
                            
                            while($linha = mysql_fetch_array($result)){
                                
								
								
                            echo "<a href='" . $linha['tipo_banner'] . "'><img src=\"banners/figuras/".$linha['patch']."\" alt=\"Compre seu imóvel\" /></a>" ;		
                            }
                            ?>
                            </div>
                            
                        </div>	
                        
                    </div> <!-- FIM .blocoSlide -->
                    
                </div><?php //fim DIV BANNERS?>  
</div>      