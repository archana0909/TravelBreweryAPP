@extends('layouts.app')
@section('content')

<section id="terms-conditions-header">
  <div class="container">
    <div class="row outline-row">
      <div class="text-center">
        <h1 class="section-heading">Terms and Conditions</h1>
        <hr>
      </div>
    </div>

  </div>
</section>
<section id="terms-conditions-payment" class="bg-dark">
  <div class="container">
    <div class="row">
      <div class="text-center">
        <h2 class="section-heading">Terms and Conditions For Payment</h2>
        <hr>
      </div>
    </div>
    <div class="row">
      <ul>
        <li>Advance deposit of Rs 20,000 (non-refundable) required for booking the trip for one person per tour</li>
        <li>Subject to the successful payment of the advance, the client will recieve confirmation for the
          trip either in writing or by way of email with the trip details. It is to be also noted that the client
          has agreed to book their trip only after satisfactorily recieving all the required info related to their
          trip as well as after reading all the Terms and Conditions as well as Cancellation Terms related to the trip</li>
          <li>Remaining trip payment to be made maximum within 45 days of departure, failure to do so will lead
            to cancellation of the individual's trip and forfeiture of the advance as mentioned before,
            unless and until an alternative arrangement is discussed between the client and <strong>The Travel Brewery</strong>
            and both parties agree on it in principle or on paper</li>
          </ul>
        </div>
      </div>
    </section>
    <section id="cancellation-terms" class="bg-primary">
      <div class="container">
        <div class="row">
          <div class="text-center">
            <h2 class="section-heading">Cancellation Policy</h2>
            <hr>
          </div>
        </div>
        <div class="row">
          <ul>
            <li>20 days before the departure - Deposit (Rs 20,000) is forefeited </li>
            <li>Cancellation Notice given less than 45 days but more than 30 days of departure -
              50% of the total trip fare is charged from the client</li>
              <li>Cancellation Notice given between 30-21 days from Departure	-75% of the total trip fare is charged from the client</li>
              <li>Cancellation Notice given less than 21 days from departure	100% of the total trip fare is charged from the client</li>
            </ul>
          </div>
        </div>
    </section>
@endsection
