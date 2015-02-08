<div class="barraBreadCumps">
            <div style="margin-top:5px;margin-left:8px; width:422px; padding:5px; border-bottom:1px solid #A3A3A3;">
            	<?php
				
				$ahref = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER ['REQUEST_URI'];
				
				//pega somente nome da página e tira o '.php' do final da string e tira tambmém a '/' no inicio da string
				$nomepagina = ucfirst(substr($_SERVER['PHP_SELF'],1,-4));
				
				//ifs para corrigir palavras que possuem caracteres especiais
				if ($nomepagina == "Portifolio"){
						$nomepagina = "Portifólio";
				}
				if ($nomepagina == "Publicacoes"){
						$nomepagina = "Publicações";
				}
				
				if ($nomepagina == "Areadeatuacao"){
						$nomepagina = "Área de atuação";
				}
				
				if ($nomepagina == "Clienteseparceiros"){
						$nomepagina = "Clientes e Parceiros";
				}

				?>
                
                <?php /*?>Monta a string para ser exibida<?php */?>
	            <span style="font-family:Myriad Pro; font-size:14px; color:#444444; ">Você está aqui: 
				<?php echo 
				"<a style=\"font-family:Myriad Pro; font-size:14px; color:#444444;font-weight:normal;\" href='http://" . $_SERVER['SERVER_NAME'] . "'>" . ucfirst($MasterPage->getNomeEmpresa()) . "</a> > " .
				"<a href='$ahref' style=\"font-family:Myriad Pro; font-size:14px; color:#444444;font-weight:normal;\">" 
				. $nomepagina . 
				"</a>"; 
				
				
				?>
                </span>
                
            </div>
        </div><?php //fim DIV BARRA breadCumps ?>