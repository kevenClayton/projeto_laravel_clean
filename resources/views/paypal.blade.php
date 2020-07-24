<form class="w3-container w3-display-middle w3-card-4 " method="POST" id="formulario-pagamento"  action="{{ route('pagar_com_paypal') }}">

    {{ csrf_field() }}

    <h2 class="w3-text-blue">Formulário de Pagamento</h2>

    <p>Integração PayPal + Laravel DEMO</p>

    <p>

    <label class="w3-text-blue"><b>R$: </b></label>

    <input class="w3-input w3-border" name="valor" type="text"></p>

    <button class="w3-btn w3-blue">Enviar Pagamento</button></p>

   </form>
