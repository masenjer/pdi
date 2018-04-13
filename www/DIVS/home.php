<?php
function MostraHome()
{
    //MostraHomeAmbNoticies();
    MostraHomeSenseNoticies();

}

function MostraHomeSenseNoticies(){
?>

<div id="DIVHome">
    <div class="row">
        <div class="col-md-3">
            <a href="#!/Cronograma_281_1" class="b-access petit" title="Cronograma" >            
                <div class="img-bg" style="background-image: url(imgDes/horaris,8.png);" alt="Cronograma"></div> 
                <span class="text">Cronograma</span> 
            </a> 
        </div>
        <div class="col-md-3">
            <a href="#!/Objetivos_238_1" class="b-access petit" title="Objetivos" alt="Objetivos">            
                <div class="img-bg" style="background-image: url(imgDes/treballfigrau_portada2,1.png);" alt="Objetivos"></div> 
                <span class="text">Objetivos</span> 
            </a> 
        </div>
        <div class="col-md-3">
            <a href="#!/Plan-de%20Estudios_282_1" class="b-access petit" title="Plan de estudios" alt = "Plan de estudios">            
                <div class="img-bg" style="background-image: url(imgDes/citaprevia,20.png);" alt = "Plan de estudios"></div> 
                <span class="text">Plan de estudios</span> 
            </a> 
        </div>
        <div class="col-md-3">
            <a href="#!/Directorio-Profesores_253_1" class="b-access petit" title="Directorio de profesores" alt="Directorio de profesores">            
                <div class="img-bg" style="background-image: url(imgDes/Practicum,0.png);" alt="Directorio de profesores"></div> 
                <span class="text">Directorio Profesores </span> 
            </a> 
        </div>
        
       <!-- <div class="col-md-4">
            <div class="avisos">        
                <div class="ContHomeContacte" >
                    <?php include("PHP/ContacteHomeCarregaDirecte.php"); ?>                
                </div>       
            </div>
        </div>

    -->
    </div>


</div>
<?php
}

function MostraHomeAmbNoticies(){
?>

<div id="DIVHome" >

    <div class="row">
        <div class="col-md-6 col-lg-7"><?php MostraPartEsquerraHome();?></div>
        <div class="col-md-6 col-lg-5">
            
                <div class="row">
                    <div class="col-md-6"><?php MostraPartCentralHome ();?></div>
                    <div class="col-md-6"><?php MostraPartDretaHome ();?></div>
                </div> 
                <div class="row margin-top" >


              
                    <div class="col-sm-6 col-md-6">
      
    
        <a href="index.php/#!/Activitats_532_1" class="b-access petit" title="">
        
            <div class="img-bg" style="background-image: url(imgDes/horaris,8.png);"></div>     
            <span class="text">Activitats</span>
            
            
        </a>
    
    
        <a href="http://blogs.uab.cat/incuab/" class="b-access petit" title="">
        
            <div class="img-bg" style="background-image: url(imgDes/treballfigrau_portada2,1.png);"></div>     
            <span class="text">INcentivem el coneixement</span>
        </a>    

    
                           
         </div>
                            
        <div class="col-sm-6 col-md-6">        
            <a href="Documents/seminaris_INc.pdf" class="b-access petit" title="" target="_BLANK">            
                <div class="img-bg" style="background-image: url(imgDes/citaprevia,20.png);"></div> 
                <span class="text">Seminaris</span> 
            </a>
            <a href="/web/estudiar/graus/practicum-1345709633820.html" class="b-access petit" title="">
                <div class="img-bg" style="background-image: url(imgDes/Practicum,0.png);"></div>
                <span class="text">Practicum i pràctiques clíniques assistencials</span>
            </a>
    

    
    <!-- FlexLink Intern 1345704910611--><!-- the page list has data! 1345704686982-->
                      
                        
                        

    



                                
                            </div>
                        </div>


                </div>
              
                
            
                    
                           
                

        </div>
        
    </div>

    

</div>

    
<?php
}
function MostraPartEsquerraHome()
{
?>


    

    <div class="row">         
        <?php include ("PHP/NoticiesCarregaContingutDirecte.php"); ?>
    </div>      


<?php

}


function MostraPartCentralHome()
{
?>

    

<div class="ContHomeListEnDir" >
    <?php include("PHP/EndirMenuHomeCarregaDirecte.php"); ?>
</div>

<?php
}
?>
<?php
function MostraPartDretaHome()
{
?>

    
    <div class="avisos">
        
            <div class="ContHomeContacte" >
                <?php include("PHP/ContacteHomeCarregaDirecte.php"); ?>                
            </div>
       
    </div>


<?php
}?>
