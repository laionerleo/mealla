<section id="contact" style="background-image: url('<?php echo base_url(); ?>application/assets/images/iniciof5.jpg') ;  background-size: cover;">
        <div class="container">
        
            <header>
                <h2 style="color: red"><font face="Cooper Black">Contacto </font></h2>
                <p style="color: black">Cualquier consulta puede ubicarnos en las siguientes direcciones o manden un mensaje, para asi luego comunicarnos con usted</p>    
            </header> <!-- end sixteen columns -->
                        
            <div class="row row-centered">
                <div class="col-md-8 col-sm-12 col-centered">
                                    <ul class="contact-info list-unstyled list-inline">
                    
                                        <li>
                                            <div class="content">
                                                <i style="color: red" class="fa fa-home"></i>
                                                <p>Urbanización  cotoca.  Calle N°3 ..</p>
                                            </div> <!-- /.content -->
                                        </li>
                    
                                        <li>
                                            <div class="content">
                                              
                                                <a href="https://api.whatsapp.com/send?phone=59176009756"><i class="fa fa-whatsapp" style="color: green"></i></a>
                                                <p>76009756</p>
                                            </div> <!-- /.content -->
                                        </li>
                    
                                        <li>
                                            <div class="content">
                                                <i class="fa fa-at" style="color: red"></i>
                                                <p>&#115;&#112;&#97;&#109;&#x40;&#x74;&#x65;&#x6f;&#116;&#104;&#101;&#x6d;&#x65;&#115;&#x2e;&#99;&#111;&#109;</p>
                                            </div> <!-- /.content -->
                                        </li>
                                    
                                        <li>
                                            <div class="content" >
                                                <i class="fa fa-phone" style="color: red"></i>
                                                <p>350000</p>
                                            </div> <!-- /.content -->
                                        </li>
                                    </ul>
                
                                    
                    <div class="done">
                        <b>Thank you!</b> I have received your message. 
                    </div>
                    
                    <form id="contactForm" method="post" action="#">

                         <p style="color: black">Nombre</p>
                        <input type="text" name="inpnombre" id="inpnombre" class="text" />
                        <input type="hidden" name="url" id="url"  value="<?=$url?>">

                        <p style="color: black">Numero</p>
                        <input type="number" name="inpnumero" class="text" id="inpnumero" placeholder="#######" />

                            
                        <p style="color: black">E-mail</p>
                        <input type="email" name="inpemail" class="text" id="inpemail" placeholder="*****@*****" />


                        <p style="color: black">servicios</p>
                        <select id="slcservicio" name="slcservicio" style="border-width: initial; color: blue; width: 200px;">
                                   <option>Importacion a consumo </option>
                                    <option> Admision Temporal </option>
                                    <option> Reimportacion Anticipado </option>
                                    <option> Despacho Anticipado </option>
                                    <option>Despacho Courier </option>
                                    <option>Despacho inmediato  </option>
                                    <option>Despacho de menor cuuantia imp a consumo  </option>
                                    <option>Despacho parcial  </option>
                                    <option>Despacho despacho en frontera </option>
                                    <option>Asesoria en transaporte internacional y nacional </option>
                                    <option> supervisamos la logistica del movimiento fisico de la mercaderia</option>
                                    <option>Contacto directo del proveedor externo a partir de la comprar del material </option>
                                    <option>Asesoria en contratacion de seguros nacionales e internacionales </option>
                                    <option>Contratacion del medio de trasporte que traslada la mercaderia desde el recinto aduanero hasta los almacebes de su empresa</option>
                                    <option>Exportacion Definitiva</option>
                                    <option>Exportacion Temporal </option>
                                    <option>Reexportacion</option>
                        </select>
                        <p>Mensaje</p>
                        <textarea rows="5" id="inpmensaje"  name="inpmensaje" class="text"></textarea>

                        <button class="btn btn-default" type="button" id="enviarmensaje" >enviar</button>
                    </form>
                    <div id="carga" style="display: none;">
                        <p>envio con exito</p>
                    </div>
                                        
                </div> <!-- end contact-form -->
            </div>             
        </div> <!-- end container -->






                    <!-- ************ google map ************ -->
            <div id='map' width=100% ></div>

</section>
<script type="text/javascript">

    $(document).on("click","#enviarmensaje",function(e){
   // alert("no funciona");
    
    var fieldsP = $( "#contactForm" ).serialize();
    var urlAjax=$("#url").val()+"mandar";
    $.ajax({
      url: urlAjax,
      data: {fieldsP},
      type:'POST',
      
      beforeSend:function(){
      
      var div2 = document.getElementById('carga');
                               div2.style.display = 'block';
      },
      error:function(response){
        alert("error");
        console.log(response);
            
        
        },
      success:function(response){
        alert("entro bien ");
        console.log(response);
            
        
        },
      complete:function(){
       var div2 = document.getElementById('carga');
                               div2.style.display = 'none';
      }  
    })
  });
    


</script>

