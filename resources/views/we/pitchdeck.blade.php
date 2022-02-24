@extends('we.layouts.layout') @section('front_content')

<div class="col-md-10">

                    <div class="incubate-form " style="margin-left:250px; margin-top:50px; ">
					@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
                        <div class="incubate-form-sec" >
                            <form action="{{url('we/add/pitchdeck')}}"  method="post" enctype="multipart/form-data">
                                @csrf
								<h3>Problem Definition</h3>
                                <div class="form-group">                                        
                                    <label>What is the problem you are trying to solve? (If you include TAM-SAM-SOM with Source, with feasibility and relevance it will strengthen the articulation of your problem statement)*</label>
                                    <input class="form-control" name="the_problem" placeholder="" required>
                                </div>
                                <div class="form-group">                                        
                                    <label>What is the Impact problem (social/sustainable) you are trying to solve?</label>
                                    <input  name="impact_problem" class="form-control" placeholder="" required>
                                </div>                      
                                <div class="form-group">                                        
                                    <label>What is your end vision that you would like to achieve?</label>
                                    <input name="your_vision" class="form-control" placeholder="" required>
                                </div>
								<h3>Your Solution</h3>
								<div class="form-group">                                        
                                    <label>What is the solution?</label>
                                    <input name="solution" class="form-control" placeholder="" required>
                                </div><div class="form-group">                                        
                                    <label>What makes it unique/ what is its Unique Value Proposition?</label>
                                    <input name="makes_it_unique" class="form-control" placeholder="" required>
                                </div><div class="form-group">                                        
                                    <label>The stage your solution is it: Proof-of-concept, Pilot, industry validation, commercialization/ traction with paid customers, etc.</label>
                                    <input name="solution_stage" class="form-control" placeholder="" required>
                                </div><div class="form-group">                                        
                                    <label>Achievements (Recognitions, Patents, etc.)</label>
                                    <input name="achievements" class="form-control" placeholder="" required>
                                </div>
								<div class="form-group">                                        
                                    <label>Current performance (spanning Financial metrics, Customers, People & Process metrics, etc.)</label>
                                    <input name="current_performance" class="form-control" placeholder="" required>
                                </div>
								<h3>Moneys</h3>
								<div class="form-group">                                        
                                    <label>Current Sales: Revenue, profit</label>
                                    <input name="current_sales" class="form-control" placeholder="" required>
								</div>	
								<div class="form-group">                                        
                                    <label>Current valuation</label>
                                    <input name="current_valuation" class="form-control" placeholder="" required>
								</div>
								<div class="form-group">                                        
                                    <label>Details on any existing investors or grants received</label>
                                    <input name="existing_investors" class="form-control" placeholder="" required>
								</div>
								<div class="form-group">                                        
                                    <label>Investment Ask with Equity willing to be diluted</label>
                                    <input name="investment_ask" class="form-control" placeholder="" required>
								</div>
								<h3>Team</h3>
								<div class="form-group">                                        
                                    <label>Details on Founding team (Background, role and equity holding)</label>
                                    <input name="founding_team" class="form-control" placeholder="" required>
								</div>
								<div class="form-group">                                        
                                    <label>Vision</label>
                                    <input name="vision" class="form-control" placeholder="" required>
								</div>
								<div class="form-group">                                        
                                    <label>Core Values</label>
                                    <input name="core_values" class="form-control" placeholder="" required>
								</div>
								<div class="form-group">                                        
                                    <label>How are these founders the right people to solve the problem and scale the business? (Founder-Market-Fit) </label>
                                    <input name="founder_market_fit" class="form-control" placeholder="" required>
								</div>
								<div class="form-group">                                        
                                    <label>The immediate next hires/ kind of people or roles you need to onboard for the business</label>
                                    <input name="next_hires" class="form-control" placeholder="" required>
								</div>	
								<h3>Market/ Business Perspective</h3>
								<div class="form-group">                                        
                                    <label>Market Opportunity assessment</label>
                                    <input name="market_opportunity" class="form-control" placeholder="" required>
								</div>
								<div class="form-group">                                        
                                    <label>Barrier to Entry</label>
                                    <input name="barrier_to_entry" class="form-control" placeholder="" required>
								</div>
								<div class="form-group">                                        
                                    <label>Competitive analysis with a clear understanding of your solution’s Value Proposition </label>
                                    <input name="competitive_analysis" class="form-control" placeholder="" required>
								</div>
								<div class="form-group">                                        
                                    <label>Organizational SWOT</label>
                                    <input name="swot" class="form-control" placeholder="" required>
								</div>
								<div class="form-group">                                        
                                    <label>Funnel/ Pipeline of business</label>
                                    <input name="funnel" class="form-control" placeholder="" required>
								</div>
								<div class="form-group">                                        
                                    <label>Current customer base and reason for why there would be stickiness of your customers with you</label>
                                    <input name="customer_base" class="form-control" placeholder="" required>
								</div>
									
                                <button class="btn-continue">Send</button>
                            </form>
                        
                        </div>
                       
                    </div>
                </div>
	@endsection