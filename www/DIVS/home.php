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
        <div class="col-md-4">
            <a href="#!/Calendario-Académico%202017-2018_256_1" class="b-access petit" title="Calendario Académico" >            
                <div class="img-bg" style="background-image: url(/imgDes/citaprevia,20.png);" alt="Calendario Académico"></div> 
                <span class="text">Calendario académico 2017 - 2018</span> 
            </a> 
        </div>
        <div class="col-md-4">
            <a href="#!/Planificación_255_1" class="b-access petit" title="Planificación" alt="Planificación">            
                <div class="img-bg" style="background-image: url(/imgDes/horaris,8.png);" alt="Planificación"></div> 
                <span class="text">Planificación</span> 
            </a> 
        </div>
        <div class="col-md-4">
            <a href="#!/Descripción-de%20Módulos_257_1" class="b-access petit" title="    Descripción Módulos" alt = "   Descripción Módulos">            
                <div class="img-bg" style="background-image: url(/imgDes/Pla_accio_tutorial,1.png);" alt = "    Descripción Módulos"></div> 
                <span class="text"> Descripción Módulos</span> 
            </a> 
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <a href="#!/Metodología-básica%20en%20investigación%20clínica_269_1" class="b-access petit" title=" Programas" alt="  Programas">            
                <div class="img-bg" style="background-image: url(/imgDes/guiarapida,1.png);" alt="   Programas"></div> 
                <span class="text"> Programas </span> 
            </a> 
        </div>
        <div class="col-md-4">
            <a href="#!/Trabajo-Fin-de-Máster_281_1" class="b-access petit" title="Prácticas y trabajo de investigación" alt="Prácticas y trabajo de investigación">            
                <div class="img-bg" style="background-image: url(/imgDes/Microscopi_icona.png);" alt="Prácticas y trabajo de investigación"></div> 
                <span class="text">Prácticas y trabajo de investigación </span> 
            </a> 
        </div>
        <div class="col-md-4">
            <a href="#!/Normativa_258_1" class="b-access petit" title="Normativa del treball d'investigació" alt="Normativa del treball d'investigació">            
                <div class="img-bg" style="background-image: url(/imgDes/treballfigrau_portada2,1.png);" alt="Normativa del treball d'investigació"></div> 
                <span class="text">Normativa del trabajo de investigación </span> 
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
      
    
        <a href="#!/Activitats_532_1" class="b-access petit" title="">
        
            <div class="img-bg" style="background-image: url(/imgDes/horaris,8.png);"></div>     
            <span class="text">Activitats</span>
            
            
        </a>
    
    
        <a href="http://blogs.uab.cat/incuab/" class="b-access petit" title="">
        
            <div class="img-bg" style="background-image: url(/imgDes/treballfigrau_portada2,1.png);"></div>     
            <span class="text">INcentivem el coneixement</span>
        </a>    

    
                           
         </div>
                            
        <div class="col-sm-6 col-md-6">        
            <a href="Documents/seminaris_INc.pdf" class="b-access petit" title="" target="_BLANK">            
                <div class="img-bg" style="background-image: url(/imgDes/citaprevia,20.png);"></div> 
                <span class="text">Seminaris</span> 
            </a>
            <a href="/web/estudiar/graus/practicum-1345709633820.html" class="b-access petit" title="">
                <div class="img-bg" style="background-image: url(/imgDes/Practicum,0.png);"></div>
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
