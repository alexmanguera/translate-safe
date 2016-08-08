@extends('layouts.master')

@section('title', 'Refund Policy')


@section('content')

<!-- ==== REFUND POLICY ==== -->

<div id="refund_policy">
	<div class="container">
		<h1>Refund & Guarantee Policy</h1>
		<h2>USCIS Guarantee</h2>
		<p>
		We'll provide a full refund for any translation not accepted by USCIS for any reason if the transaction is within 90 days. If the transaction is past 90 days, a credit will be applied to your account in the amount of the original transaction.
		</p>
		<h2>Acceptance Policy</h2>
		<p>
		TranslateSAFE is a provider of certified translations. TranslateSAFE is not responsible for determining whether an organization, group, court, government agency or bureau, or municipality will accept our translations. We do not provide refunds for translations not accepted by an organization, group, court, government agency or bureau, or municipality (except USCIS pursuant to our USCIS Guarantee).
		</p>
		<h2>Refund Policy</h2>
		<p>
		An order can only be refunded if it has not yet been sent to a translator (the order status will be "Received"). Orders that have been sent to a translator are indicated with the status "In Progress" or "In Review". <a href="{!! URL::to('/order/status') !!}">Click here to view your order status</a>.
		</p>
		<h2>Revision Policy</h2>
		<p>
		Though unlikely, in some circumstances a revision or revisions may be requested to an order by the customer. It is at the discretion of the translator whether the revision modifies the original content or corrects an error in translation. It is the policy of the company to not revise original content. Revisions are free. Revisions must be requested within 30 days of when the order was completed.
		</p>
		<h2>Notarization Policy</h2>
		<p>
		All notarized orders are notarized in either the State of Maryland or the State of Texas.
		</p>
	</div>
</div>
@endsection