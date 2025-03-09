<?php 
/*$titulo_curso="Woocommerce";

$root2 =  __DIR__;
$path = substr($root2,0,strpos($root2, "curso"))."/curso/";

include $path."diapos_theme/head.php";
$modulo = isset($_GET['modulo']) ? $_GET['modulo']:'';
add_action( 'genesis_after_header', function(){
    global $path;
    include $path."diapos_theme/body_init.php";
    echo "<h1>$titulo_curso</h1>";
*/?>
<section id="amor" class="verIndice">
                <article id="inicio_del_documento" class="indice">
<ol >

    <li><a href="#woocommerce">Woocommerce</a></li>
    <li><a href="#ordernarProductos">Ordenar productos</a></li>
    <li><a href="#redimensionar-imagenes-pruducto">Redimensionar imágenes de producto</a></li>
    <li><a href="#atributos">Atributos</a></li>
    <li><a href="#variaciones">Variaciones</a></li>
    <li><a href="#widgets">Widgets de Woocommerce</a></li>
    <li><a href="#plugins_woocommerce">Plugins Woocommerce</a></li>
    <li><a href="#pasarelas">Pasarelas de pago</a>
<ol>
            <li><a href="#paypal">Paypal</a></li>
            <li><a href="#configuracion_redsys">Redsys</a></li>
            <li><a href="#configuracion_redsys">Ceca</a></li>
                        <li><a href="#transferencia">Transferencia bancaria</a></li>

        </ol>

    </li>
    <li><a href="#shortcodes">Shortcodes y API</a></li>
    <li><a href="#snipets">Algunos snippets</a>
        <ol>
            <li><a href="#opciones_Filtrado">Quitar opciones de filtrado</a></li>
        </ol>
    </li>
    <li><a href="#impuestos">Impuestos</a></li>
    <li><a href="#opciones_Filtrado">Opciones de filtrado</a></li>

    <li><a href="#metodos">Métodos de envío</a></li>
   

</ol>
</article>
</section>

<main class="curso">
<section>
    <article>
        <h2 id="woocommerce">WooCommerce - excelling eCommerce</h2>
        <p>Tras descargar, instalar y activar el plugin debemos pulsar en <span class="u">"Install WooCommerce Pages"</span>, para que aparezcan en el menú las páginas del plugin. Estas páginas Pueden seleccionarse desde el menu Pages de Wordpress y modificarse, eliminarse, etc.</p>



        <h4></h4>
        <p><span class="black bold">Woocommerce → Products: </span> Desde este menú podremos añadir tanto productos como categorías.</p>

        <p><span class="black bold">Instalar productos de ejemplo: </span>Tools → Import → Wordpress → Activate plugin and run the importer → browse → wordpressFolder/wp-content/plugins/woocommerce/dummy_data/dummy_data.xml
            → marco la check  Download and import file attachments</p>

            <p><span class="black bold">Cambio de la moneda y localización de la tienda por defecto</span>: Woocommerce → Settings → general </p>
            <p><span class="black bold">Establecer una oferta (sale) para un producto</span>: En la pantalla de edición del producto, justo debajo de donde establecemos su precio, podemos establecer su precio en oferta. Habrá que asignarla, además, un periodo.</p>
            <p><span class="black bold">Crear un link a categorías de productos: </span> Apariencia -> menu → screen options (esquina superior derecha) → marcamos woocommerce categories.</p>
            <p><span class="black bold">Ir directamente al carrito de la compra sin tener que pulsar en el enlace que aparece al añadir un producto:</span> Woocommerce → Settings → Productos Tab → Presentación → 
                <ul>
                    <li>Marco la check " Redirigir a la página de la cesta después de la adición exitosa "</li>
                    <li>Desmarco la check " Habilitar AJAX añadir al carrito de botones en archivos ";</li>
                </ul>
            </p>

            <p><span class="black bold">¿Dónde estan indicadas las páginas de wordpress que serán vinculadas a shop, cart, products, etc.? </span>Woocommerce -> settings -> Products -> Display</p>
        </article>
        <article>
            <h2>Usuarios</h2>
            <p>Durante el proceso de compra, el usuario puede marcar una check para decidir si quiere crear una cuenta en la página. Para que esta check esté marcada por defecto, podemos usar el siguiente código:</p>
            <pre><code>add_filter('woocommerce_create_account_default_checked' , function ($checked){
    return true;
});</code></pre>
        </article>
<article>
    <h2 id="ordernarProductos">Ordenar productos</h2>
    <p>Para establecer un orden personalizado de los productos, iremos a <strong>WooCommerce > Settings -> Pestaña Products -> Display</strong> y nos aseguraremos de que está marcada la opción <strong>Default Sorting</strong></p>

    <p>Luego, para alterar este orden a nivel individual, modificaremos para cada producto <strong>Product data -> Advanced -> Menu order</strong>, asignando un valor menor (o más negativo) al que queremos que aparezca antes. </p>

</article>

<article>
	
	<h2>Redimensionar imágenes de producto</h2>
<p>Apariencia -> Personalizar -> Woocommerce -> Imagenes de producto</p>

</article>
        <article>
            <h2 id="atributos">Atributos</h2>
            <p>Definir atributos sirve para poder establecer filtos en las páginas de tienda y para poder seleccionar una variación de un producto (en varios colores, tamaños, etc) a la hora de comprar un producto</p>
            <p>Para definir estos atributos: Menú productos -> atributos</p>
            <p>Para definir los posibles valores de estos productos y las posibles variaciones que se podrán seleccionar al comprarlos, iremos directamente al producto deseado.</p>
            <h2 id="variaciones">Variaciones</h2>
            <p>Una vez definidos los atributos, podemos hacer que al seleccionar uno de ellos en el frontend cambie la imagen del producto. Es necesario definir el producto como <strong>variable</strong> (no simple) y asignarle un precio.</p>
<p>Si quiero que estas variaciones sean un pequeño icono visual en lugar de un combo desplegable, puedo usar el plugin  <a href="https://woocommerce.com/products/variation-swatches-and-photos/" target="_blank">Variation Swatches and Photos</a></p>
<h3>Stock en variaciones</h3>
<p>No se administra desde el lugar habitual, sino desde <span class="bold">Datos del producto -> Variaciones -> selecciono una variación y cambio el stock</span></p>

        </article>
        <article>
            <h2 id="widgets">Widgets de Woocommerce</h2>
            <ul>
                <li><span class="bold">Woocommerce Cart</span>: Te muestra el carrito de la compra de lo que vas comprando.</li>
                <li><span class="bold">Woocommerce Product Category</span>: Te muestra los enlaces a las categorías de productos. Tiene varios modos de visualización.</li>
                <li><span class="bold">Woocommerce Product Tag</span>: Muestra una nube de etiquetas con las etiquetas de cada producto. El tamaño de las mismas depende del numero de productos etiquetados con esa palabra.</li>
                <li><span class="bold">Woocommerce Layered Nav</span>: permite filtrar los productos mostrados de acuerdo a diferentes criterios.</li>
                <li><span class="bold">Woocommerce Layered Nav Filters</span>: permite ver los filtros de productos activos y desactivarlos.</li>
<li><span class="bold">Buscador de productos</span>: Este widget sólo ofrece en sus resultados de búsqueda los productos de la tienda, evitando las entradas del blog y mejorando la presentación con imágenes destacadas. Si quremos que funcíone en una página multi idioma, habrá que añadir el campo "idioma" al formulario.
<pre><code>add_filter( 'get_product_search_form' , 'me_custom_product_searchform' );

function me_custom_product_searchform( $form ) {
	$txt=&quot;productos&quot;;
	if(ICL_LANGUAGE_CODE==&quot;en&quot;)$txt=&quot;products&quot;;
	$form = '&lt;form role=&quot;search&quot; method=&quot;get&quot; id=&quot;searchform&quot; action=&quot;' . esc_url( home_url( '/'  ) ) . '&quot;&gt;
		&lt;div&gt;
		&lt;label class=&quot;screen-reader-text&quot; for=&quot;s&quot;&gt;' . __( 'Search for:', 'woocommerce' ) . '&lt;/label&gt;
		&lt;button type=&quot;submit&quot; id=&quot;searchsubmit&quot; /&gt;
		&lt;span class=&quot;icon&quot;&gt;&lt;i class=&quot;fa fa-search&quot;&gt;&lt;/i&gt;&lt;/span&gt;   
	&lt;/button&gt;  
	&lt;input type=&quot;text&quot; value=&quot;' . get_search_query() . '&quot; name=&quot;s&quot; id=&quot;s&quot; placeholder=&quot;' . __( &quot;$txt&quot;, 'woocommerce' ) . '&quot; /&gt;                           
	&lt;input type=&quot;hidden&quot; name=&quot;post_type&quot; value=&quot;product&quot; /&gt;
	&lt;input type=&quot;hidden&quot; name=&quot;lang&quot; value=&quot;'.ICL_LANGUAGE_CODE.'&quot;&gt;
	&lt;/div&gt;
	&lt;/form&gt;';
	return $form;
}</code></pre>
</li>
            </ul>
        </article>
        <article>
            <h2 id="plugins_woocommerce">Algunos plugins interesantes de woocommerce</h2>
            <ul>
                <li><a href="https://woocommerce.com/products/woocommerce-waitlist/">WooCommerce Waitlist </a>: Permite establecer una lista de espera en la que el usuario se inscribe en el caso de que no queden existencias.</li>
                <li><a href="https://wordpress.org/plugins/weight-based-shipping-for-woocommerce/">WooCommerce Weight Based Shipping </a>: Permite establecer los costes de envío en función del peso del envío. Si lo configuramos, no es necesario configurar los gastos de envío en la sección habitual de woocomerce.</li>
                <li><a href="http://www.woothemes.com/products/warranty-requests/"> Returns and Warranty Requests </a>: Plugin de pago para gestionar la devolución de las compras. No funciona bien con productos pagados antes de la instalación del plugin.</li>
                <li><a href="https://wordpress.org/plugins/taxonomy-terms-order/"> Category Order and Taxonomy Terms Order </a>: Permite gestionar el orden en que se mostrarán las categorías. Para usarlo, iremos a <strong>productos -> Orden de Taxonomía</strong></li>
                <li><a href="https://woocommerce.com/products/variation-swatches-and-photos/" target="_blank">Variation Swatches and Photos</a>: Permite establecer imágenes para las variaciones de producto, en lugar del combo desplegable que se usa por defect.</li>

                <li><a target="_blank" href="https://wordpress.org/plugins/advanced-woo-search/">Advanced Woo Search — WordPress Plugins</a>: Potencia la búsqueda que nos da el buscador de serie de woocomerce. Permite buscar por categorías, muestra un previo de los resultados, etc. Si queremos el el placeholder del plugin muestre un texto concreto, deberemos usar el siguiente código:
<pre><code>add_filter( 'aws_searchbox_markup', 'add_translated_placeholder_aws' );
function add_translated_placeholder_aws( $markup ) {
    if( ! is_plugin_active( 'advanced-woo-search/advanced-woo-search.php') || ! function_exists( 'AWS' ) ) {
        return;
    }
 
    $placeholder   = AWS()->get_settings( 'search_field_text' );
 
    <span class="green">// register placeholder</span>
    do_action( 'wpml_register_single_string', "Custom Advanced Woo Search", "Custom Advanced Woo Search: search placeholder", $placeholder );
    <span class="green">// $translated = apply_filters( 'wpml_translate_single_string', $placeholder, "Custom Advanced Woo Search", "Custom Advanced Woo Search: search placeholder", ICL_LANGUAGE_CODE );</span>
    $translated = "Productos";
    if(ICL_LANGUAGE_CODE == "en")$translated="Products";
    $markup = str_replace( $placeholder, $translated, $markup );
    return $markup;
}</code></pre>
                </li>

                <li><a href="https://woocommerce.com/products/product-add-ons/">Produc Add-ons</a> → Permite que el usuario seleccione los atributos del producto mediante checkboxes.</li>

            </ul>
<h4>Campos personalizados</h4>
<ol>
    <li><a target="_blank" href="http://codecanyon.net/item/fancy-product-designer-woocommerce-plugin/6318393">Fancy product designer</a> → Permite personalizar el diseño del producto que estamos vendiendo.</li>
    
    <li><a target="_blank" href="http://codecanyon.net/item/fancy-product-designer-woocommerce-plugin/6318393">Fancy product designer</a> → Permite personalizar el diseño del producto que estamos vendiendo.</li>

    <li><a target="_blank" href="https://wordpress.org/plugins/wc-fields-factory/">WC Fields Factory</a> → Permite añadir nuevos campos para que el cliente pueda personalizar el producto que está comprando.</li>

    <li><a target="_blank" href="https://wordpress.org/plugins/woo-checkout-field-editor-pro/">WooCommerce Checkout Field Editor (Manager) Pro</a> → Permite añadir nuevos campos para que el producto pueda personalizar los valores en la página de checkout.</li>
</ol>

        </article>
        <article>
            <h2 id="pasarelas">Pasarelas de pago</h2>

            <h3 id="transferencia">Transferencia bancaria</h3>
            <pre><code>
                Nombre de la cuenta: Negocio guay S.A.
                Número de cuenta: 0081 1111 2222 3333 4444
                Nombre del banco: Banc Sabadell
                Tipo de cuenta: Expansión Negocios
                IBAN:  ES23
                BIC / Swift: BSAB ESBB      
            </code></pre>


            <h3 id="paypal">Paypal</h3><p>Viene integrado de serie en Woocomerce. Se llevan un 3.4% de comisión y 0.35 céntimos de comisión fija, lo cual es bastante elevado comparado con el resto. Además abandonas la página web en el momento del pago. Tiene una opción para pagar con tarjeta utilizando paypal, pero la gente no la suele usar. Si queremos que la gente nos pague con tarjeta, deberíamos emplear alguna de las siguientes opciones. <br>Para pagar a través de paypal habrá que introducir las credenciales en settings-> paypal.</p>
            <p><a target="_blank" href="https://developer.paypal.com/docs/classic/api/apiCredentials/">En este enlace tienes las instrucciones para obtener las credenciales</a>.</p>
            <p> Para acceder a nuestra cuenta business (desde la que obtener las claves API y ver nuestras transacciones) pulsa <a target="_blank" href="https://www.paypal.com/businessexp/summary">aquí</a>.</p>

    <h4>Configurar cuentas sandbox para Paypal</h4>
    <h5>Vendedor: </h5>
    <ul>
        <li>user: monteserin_vendedor@sandbox.com</li>
        <li>pass: monteserin</li>
        <li>API user: monteserin_vendedor_api1.sandbox.com</li>
        <li>API password: HSHXHDF8GKTQVM4B</li>
        <li>API signature: AFcWxV21C7fd0v3bYYYRCpSSRl31A6nEm2Td2tR6N5IwUTvSoAtU7Cug</li>
    </ul>
    <h5>Comprador</h5>
    <ul>
        <li>user: monteserin_comprador@sandbox.com</li>
        <li>monteserin</li>
    </ul>
            <h3><a target="_blank" href="http://www.woothemes.com/products/stripe/"><strong>stripe</strong></a></h3><p>Puedes pagar con tu tarjeta bancaria directamente, sin abandonar tu sitio web. Se llevan un 2.9% de comisión. Es muy cómoda, pero tiene el inconveniente de que el cliente debe poner sus datos bancarios en la propia web y tal vez no se fíe. En las siguientes pasarelas, el cliente va a la página del banco.</p>

         <h3 id="configuracion_redsys">Configuración Pago con Tarjeta (REDSYS) </h3>
                <p>Lo gestionamos desde Woocommerce -> Settings -> Checkout</p>
                <h4>Este es el mail que nos mandan desde la entidad bancaria para configurar la pasarela:</h4>
                <div style="background:#FFD5D5; padding:15px; border:1px solid blue; border-radius:15px">
                    <p>Estimado cliente,</p>
                    <p>Le agradecemos habernos elegido como entidad gestora de su TPV VIRTUAL, le acompañaremos en todo momento durante el proceso de alta, integración y mantenimiento de su CYBERPAC.</p>
                    <p>Le adjuntamos la documentación necesaria para poder realizar la integración de su tienda con nuestra pasarela.</p>
                    <p>A continuación le mostramos la información necesaria para llevar a cabo la integración:</p>

                    <p>Credenciales de acceso al Módulo de Administración</p>
                    <p>Web de acceso: https://burabura <br>
                        Usuario: [codigo_usuario] <br>
                        Password: [password]</p>



                        <p>Datos para operar en el entorno de Test</p>
                        <p> Número de comercio (FUC) (Ds_Merchant_MerchantCode)     [numero_comercio] <br>
                         Número de terminal (Ds_Merchant_Terminal)   [numero_terminal] <br>
                         Moneda del terminal (Ds_Merchant_Currency)  [moneda_terminal] <br>
                         Clave secreta de encriptación   [clave_secreta_de_encriptacion] <br>
                         Tipo de cifrado     SHA256</p>


                         <p>Prueba operación aceptada</p>
                         <p>Número de tarjeta   [numero_tarjeta] <br>
                            Caducidad   [caducidad] <br>
                            Código CVV2     [codigo_cvv2] <br>
                            Código CIP  [codigo_cip]</p>


                            <p>Prueba operación denegada</p>
                            <p> Número de tarjeta   [numero_tarjeta] <br>
                             Caducidad   [caducidad]</p>



                             <p>Podrá descargar los módulos facilitados por Redsys para las distintas plataformas de tienda online (Prestashop, WordPress, Magento, etc...) en la siguiente dirección: http://www.redsys.es/wps/portal/redsys/publica/areadeserviciosweb/descargaDeDocumentacionYEjecutables/</p>
                             <p>Para realizar el pase a entorno real conteste a este correo electrónico.</p>
                             <p>Les recordamos que para poder realizar la verificación de la pasarela en su página web, es necesario que la web esté operativa, las imágenes de los productos estén cargadas y diseñado el carrito de la compra.</p>
                             <p>Para cualquier duda o consulta puede contactar con nosotros mediante la dirección de correo: caixabank@necomplus.com o en el teléfono: 900.834.172</p>
                             <p>Nuestro horario de atención es de lunes a viernes 9:00h. a 22:00h.</p>
                             <p>Cordialmente,</p>
                             <p>Soporte Cyberpac Caixabank    </p></div>
                             <p>Y esta es la configuración que habrá que poner en Woocommerce:</p>
                             <div  style="background:#FFD5D5; padding:15px; border:1px solid blue; border-radius:15px">
                                FUC Comercio: [numero_comercio] <br>
                                Clave secreta de encriptacion: [clave_secreta_de_encriptacion] <br>
                                Terminal: [numero_terminal]    
                            </div>
       


<h3 id="ceca">Ceca</h3>
            <p> Es la pasarela de pago que utilizan ciertos bancos españoles (Caja badajoz, Caja Círculo, Caja de Burgos, CajaSur, Caja Granada, Caja de guadalajara, Caja Rioja, Caixa Laietana, Caja Murcia, CajAstur, Sanostra, La Caja de Canarias, CAN ( Caja navarra), Caja Canarias, Caja Cantabria, Caja Segovia, CaixaNova, IberCaja, CAM, Caixa Galicia, Caja de Ávila, BBK, KutxaBank, Caja Vital Kutxa, Caja de Extremadura, Kutxa, Caja duero, y tantas otras). Hay que ponerse en contacto con el banco para que nos dé los datos que introduciremos en el plugin. En general, hay que cubrir un mínimo de ventas o pagar una comisión.</p>
            <h4><a target="_blank" href="http://www.redsys.es/">Servired/Redsys</a> </h4>
            <p>Es la pasarela de pago que utilizan ciertos bancos españoles (La Caixa, Bankia, Banc Sabadell, etc).  Hay que ponerse en contacto con el banco para que nos dé los datos que introduciremos en el plugin. En general, hay que cubrir un mínimo de ventas o pagar una comisión.</p>
           
           <h4>Transferencias</h4><p>No implican ninguna comisión, pero son incómodas para el cliente final. Para el vendedor es lo más cómodo.</p>
            <h4>Contrarreenvolso</h4>Es caro y tosco.</p>
            <p>La idea no es tener muchas pasarelas de pago, sino tener las necesarias. Tener muchas pasarelas, ensucia el proceso de compra, complica el seguimiento de los pagos y es más pago.</p>
            <p><a target="_blank"  href="    
                http://www.woothemes.com/products/stripe/">    
                <strong>WooCommerce Stripe Gateway</strong></a> Permite hacer cobros con tarjeta a través de Stripe y cancelar los cobros en caso deseado (por ejemplo si para formar un grupo de alumnos no se llega al mínimo de ellos).Las API key de stripe están en este enlace: <a href="https://dashboard.stripe.com/account/apikeys">API Stripe</a></p>
                            </article>
                        </section>
                        <section>                            <h2 id="shortcodes">Shortcodes y API</h2>

                            <article>
                            <p><a target="_blank"  href="http://docs.woothemes.com/document/woocommerce-shortcodes/">Shortcodes</a></p>
                            <p><a target="_blank" href="https://docs.woocommerce.com/wc-apidocs/hook-docs.html">Hooks</a></p>

<p><a target="_blank" href="https://docs.woocommerce.com/wc-apidocs/hook-docs.html">API</a></p>                            
                        </article>

</section>
<section>
    <h2 id="snipets">Algunos Snippets</h2>

<article>

    <h3 id="opciones_Filtrado">Quitar opciones de filtrado</h3>
    <pre><span class="black bold">functions.php</span><code><span class="green">// Options: menu_order, popularity, rating, date, price, price-desc</span>
 
function my_woocommerce_catalog_orderby( $orderby ) {
    unset($orderby["rating"]);
    return $orderby;
}
add_filter( "woocommerce_catalog_orderby", "my_woocommerce_catalog_orderby", 20 );</code></pre>
            <h3 id="borrar elementos">Borrar elementos de la página de checkout</h3>
<pre><code>add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
 
function custom_override_checkout_fields( $fields ) {
    unset($fields['billing']['billing_first_name']);
    unset($fields['billing']['billing_last_name']);
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_address_1']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_city']);
    unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_country']);
    unset($fields['billing']['billing_state']);
    unset($fields['billing']['billing_phone']);
    unset($fields['order']['order_comments']);
    unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_last_name']);
    unset($fields['billing']['billing_email']);
    unset($fields['billing']['billing_city']);
    return $fields;
}</code></pre>

</article>
<article>
    <h3>Quitar featured image de un producto simple</h3>
    <pre><span class="black bold">functions.php</span><code>function remove_gallery_and_product_images() {
if ( is_product() ) {
    remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );
    }
}
add_action('template_redirect', 'remove_gallery_and_product_images');</code></pre>
</article>
<article>
    <h3>Poner título de producto sobre el thumbnail</h3>
    <pre><code>remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );</code></pre>
</article>
<article>
    <h3>Cambiar el orden de las cosas en la página de Single Product</h3>
    <pre><code>remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
<span class="green">// Add product meta in new position</span>
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 5 );

<span class="green">// Remove product title from its original position</span>
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
<span class="green">// Add product title in new position</span>
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 10 );

<span class="green">// Remove product price from its original position</span>
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
<span class="green">// Add product price in new position</span>
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 15 );

<span class="green">// Remove product tabs (description, additional information, reviews)</span>
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );

<span class="green">// Add product description tab content in new position</span>
function woocommerce_template_product_description() {
    woocommerce_get_template( 'single-product/tabs/description.php' );
}
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_product_description', 20 );

<span class="green">// Add product additional information tab content in new position</span>
function woocommerce_template_product_additional() {
    woocommerce_get_template( 'single-product/tabs/additional-information.php' );
}
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_product_additional', 30 );

<span class="green">// Remove product add-to-cart from it original position</span>
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
<span class="green">// Add product add-to-cart in new position</span>
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 40 );

<span class="green">// Remove product 'Related Products'</span>
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

<span class="green">// Remove shop breadcrumb</span>
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );

<span class="green">// Remove main shop page "Showing X results" text</span>
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );

<span class="green">// Remove main shop page product filter</span>
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );</code></pre>
</article>
<article>
    <h3>Modificaciones en plantilla hija</h3>
    <p>Copiaremos los siguiente ficheros de la carpeta del plugin y los pegaremos en la ruta indicada:</p>
    <pre><code>themeFolder/woocommerce/cart/cart-totals.php
themeFolder/woocommerce/cart/cart.php
themeFolder/woocommerce/cart/content-single-product.php
themeFolder/woocommerce/cart/woocommerce_configuration.php</code></pre>
</article>
</section>
<section>
<article >
	<h2 id="impuestos">Impuestos</h2>

	<p>1) Woocomerce -> general -> marco la check ->  Activa los impuestos y los cálculos de impuestos</p>

	<p>2) Woocommerce -> Impuesto -> voy a introducir los precios con impuestos incluidos</p>
</article>

<article><h2 id="metodos">Métodos de envío</h2>

<ol>
    <li>Woocommerce -> ajustes -> zonas de envío -> Añado una zona</li>
    <li>Cada zona de envío podrá tener varios métodos de envío. Por ejemplo, el envío a Barcelona podría tener las siguientes opciones simultaneamente:
<ol>
    <li>Envío local (recogida en tienda y coste 0)</li>
    <li>Envío gratuito (para compras superiores a cierta cantidad)</li>
    <li>Precio fijo (por defecto)</li>
</ol>
</li>
</ol>

<h3>Consideraciones</h3>
<ol>
    <li>Para poder ver correctamente los costes de envío antes de introducir los datos del comprador, este debe introducir una dirección: 
<img src="img/metodos-envio.png" alt="métodos de envío woocommerce" style="display: block">
    </li>
    <li>Si queremos definir varios métodos de envío para una misma zona, no definiremos varias zonas asignando a cada una un método de envío, sino que definiremos una zona con varios métodos de envío.

<img src="img/zona-envio.png" alt="zonas de envio woocommerce" style="display: block">
    </li>
    <li>Si hemos definido la zona de envío Barcelona y la zona de envío España, y el usuario introduce que la dirección de entrega está en Barcelona, no se mostrarán los métodos de envío de España.</li>
</ol>

<h4>Plugin para establecer los costes del envío en función del peso</h4>
<p><a href="https://wordpress.org/plugins/weight-based-shipping-for-woocommerce/">WooCommerce Weight Based Shipping </a> Nos permite definir costes en función del peso del envío. Podrémos definir estos costes...</p>

<ul>
    <li>De manera individual para una zona de envío dentro del menú de métodos de envío.
<img src="img/weight-based-shipping-configuracion-por-zona.png" alt="weight based shipping configuración por zona" style="display:block" >
    </li>
    <li>De manera global para todas las zonas de envío en el menú de envíos.
<img src="img/weight-based-shipping-configuracion-global.png" alt="weight based shipping configuración global" style="display:block">
    </li>
</ul>
  este plugin no será necesario configurar los gastos de envío en la sección habitual de woocomerce.</p>
</article>
</section>
</main>
<?php 
/*});
include $path."/diapos_theme/footer.php";
*/
?>