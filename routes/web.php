<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\SectorController;
use App\Http\Controllers\Admin\PaymentdetailController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\JuryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CampaignController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MarkingschemaController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\MarkingseventController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\Admin\SectorMailController;
use App\Http\Controllers\Admin\ExcelController;
use App\Http\Controllers\Admin\MailController;
use App\Http\Controllers\Admin\TemplateController;
use App\Http\Controllers\Auth\AdminloginController;
use App\Http\Controllers\Auth\FacesloginController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\WeController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Jury\JuryHomeController;
use App\Http\Controllers\Jury\JuryEventController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\MobileloginController;
use App\Http\Controllers\Admin\CovidwarriorsController;

use App\Http\Controllers\Faces\FacesHomeController;
//use App\Http\Controllers\Faces\BlogController;
use App\Http\Controllers\Faces\UserEventController;
use App\Http\Controllers\PollingController;
use App\Http\Controllers\LiveController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\Admin\ChallengeController;
use App\Http\Controllers\Admin\NewindexController;
use App\Http\Controllers\Admin\AdminWorkController;
use App\Http\Controllers\Admin\CertificatelistController;
use App\Http\Controllers\Admin\YoutubeController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\TeamlevelController;
use App\Http\Controllers\Admin\TeamloginController;
use App\Http\Controllers\Influncers\WizardController;
use App\Http\Controllers\Auth\InfluencersloginController;
use App\Http\Controllers\Influncers\InfluencersHomeController;
use App\Http\Controllers\Admin\WarriorappreciationController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\CovidcontactController;
use App\Http\Controllers\Admin\CovidHomeController;
use App\Http\Controllers\Admin\InfluencerController;
use App\Http\Controllers\Admin\MaskController;
//use App\Http\Controllers\Admin\CovidHomeController;

use App\Http\Controllers\Admin\BlogcommentController;
use App\Http\Controllers\SummitController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\Admin\AdminSummitController;
use App\Http\Controllers\Admin\GlobalsummitController;
use App\Http\Controllers\Admin\AwardeeController;
use App\Http\Controllers\Admin\InfluencerEventController;
use App\Http\Controllers\Admin\AdminEventController;

use App\Http\Controllers\Admin\ResourceController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\MentorController;
use App\Http\Controllers\Admin\CareerpageController;
use App\Http\Controllers\Admin\CareerformController;
use App\Http\Controllers\Admin\OurteamController;
use App\Http\Controllers\Admin\AdminIncubationController;
use App\Http\Controllers\Admin\AdminCommunityController;
use App\Http\Controllers\Admin\AdminStoriesController;
use App\Http\Controllers\Admin\AdminAwardController;
//new
use App\Http\Controllers\frontEnd\CareerController;
use App\Http\Controllers\frontEnd\MentorshipController;
use App\Http\Controllers\frontEnd\FaqsupportController;
use App\Http\Controllers\frontEnd\frontEndOurteamController;
use App\Http\Controllers\frontEnd\IncubationController;
use App\Http\Controllers\frontEnd\FrontEndBlogController;
use App\Http\Controllers\frontEnd\PolicyController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CommunityController;
use Illuminate\Foundation\Auth\Users;
use App\Http\Controllers\Auth\UserForgetPassword;
use Illuminate\Support\Facades\Auth;

//use Auth\VerificationController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('old', [FrontendController::class, 'old']);
//we routes
// Route::get('/we/index',  [WeController::class, 'index']);
//Route::get('/we/login',  [WeController::class, 'login']);
Route::get('/we/awards',  [WeController::class, 'awards'])->name('award.upcoming');
Route::get('/we/awards/past',  [WeController::class, 'awards_past'])->name('award.past');
Route::get('/we/awards/{id}',  [WeController::class, 'awards_detail'])->name('awards.detail');
Route::get('/we/blog',  [WeController::class, 'blog']);
Route::get('/we/pitchdeck',  [WeController::class, 'pitchdeck'])->name('we.pitch-deck');
Route::get('/we/communities',  [WeController::class, 'communities']);
Route::get('/community/{com_id}', 'App\Http\Controllers\CommunityController@community');
Route::get('/community/events/{com_id}', [CommunityController::class, 'community_event']);
Route::get('/we/profile',  [WeController::class, 'user_profile'])->name('we.profile');
Route::get('/community/about/{com_id}', [CommunityController::class, 'about'])->name('community.about');

Route::get('/we/community-page',  [WeController::class, 'community_page']);
Route::get('/we/community_setting/{com_id}',  [CommunityController::class, 'community_setting'])->name('we.community_setting');
Route::post('/community_update/{id}',  [CommunityController::class, 'update'])->name('frontendcommunity.update');
Route::get('/we/contact-us',  [WeController::class, 'contact_us']);
Route::post('/newsletter',  [WeController::class, 'newsletter_store'])->name('newsletter.store');
//Route::get('/we/contact_us',  [WeController::class, 'contact_us']);
//Route::get('/we/create-community-loggedin-stage-2',  [WeController::class, 'create_community_loggedin_stage2']);
//Route::get('/we/create-community-loggedin-stage-3',  [WeController::class, 'create_community_loggedin_stage3']);
//Route::get('/we/create-community-main',  [WeController::class, 'create_community_main']);
Route::get('/we/edit-profile',  [WeController::class, 'edit_profile'])->name('edit.profile');
Route::post('/we/update-profile', [WeController::class, 'Update_profile'])->name('update.profile');
Route::get('/we/event',  [WeController::class, 'event']);
Route::get('/we/event-page',  [WeController::class, 'event_page']);
Route::get('/we/express-login',  [WeController::class, 'express_login']);
//Route::get('/we/faq',  [WeController::class, 'faq']);
//Route::get('/we/get-started',  [WeController::class, 'get_started']);
Route::get('/we/homepage-login',  [WeController::class, 'homepage_login']);
Route::get('/we/incubation',  [IncubationController::class, 'incubation']);
Route::post('we/add/incubation',  [IncubationController::class, 'incubationStore']);
Route::get('/we/in-the-press',  [WeController::class, 'in_the_press']);
Route::get('/we/mentorship',  [MentorshipController::class, 'mentorship']);
Route::post('/we/add/mentor',  [MentorshipController::class, 'mentorStore']);
//Route::get('/we/our-team',  [WeController::class, 'ourteam']);
Route::get('/we/profile-page',  [WeController::class, 'profile_page']);
Route::get('/we/resource',  [WeController::class, 'resource']);
Route::get('/we/signup-step-2',  [WeController::class, 'signup_step_2']);
Route::get('/we/signup-step-3',  [WeController::class, 'signup_step_3']);
Route::get('/we/we-learning',  [WeController::class, 'we_learning']);
Route::get('/we/we-shop',  [WeController::class, 'we_shop']);
Route::get('/we/career',  [CareerController::class, 'career']);
Route::post('we/add/career',  [CareerController::class, 'careerStore']);
Route::get('/we/faq',  [FaqsupportController::class, 'faq']);
Route::post('/we/faq',  [FaqsupportController::class, 'faq_filter']);
Route::post('we/add/faqsupport',  [FaqsupportController::class, 'faqStore']);
Route::post('we/add/pitchdeck', 'App\Http\Controllers\frontEnd\PitchdeckController@pitchdeckStore');
Route::get('/we/our-team',  [frontEndOurteamController::class, 'ourteam']);
Route::get('/we/blog',  [FrontEndBlogController::class, 'blog']);
Route::get('/we/policy',  [PolicyController::class, 'policy']);
Route::get('/we/termsandcondition',  [PolicyController::class, 'termsandcondition']);
Route::get('/we/empty-community',  [WeController::class, 'empty_community']);
Route::get('/we/edit-community-details',  [WeController::class, 'edit_community_details']);
Route::get('/we/create-community',  [CommunityController::class, 'index']);
//Route::post('/we/communities',  [CommunityController::class, 'insert'])->name('community.insert');
Route::get('/admin/community', [AdminCommunityController::class, 'index'])->name('backend.community');
Route::get('/admin/community/accepted', [AdminCommunityController::class, 'accepted_request'])->name('admin.accepted_request');

Route::get('/we/index',  [WeController::class, 'index'])->name('we.index');
Route::get('/we/login',  [WeController::class, 'login'])->name('we.login');
Route::get('/we/get-started',  [WeController::class, 'get_started']);
Route::post('/we/get-started2', [RegisterController::class, 'insert'])->name('we.register');
Route::get('/we/logout', [LoginController::class, 'logout'])->name('we.logout');
Route::get('/we/communities',  [WeController::class, 'communities'])->name('we.communities');
Route::resource('admin/stories', AdminStoriesController::class);

// * Event Page
Route::get('/we/event',  [WeController::class, 'event'])->name('we.event');
Route::get('/event/{event_id}', [WeController::class, 'event_page']);

// ?  Protected Routes for Front Users
Route::group(['middleware' => 'front_user_auth'], function () {

  Route::post('/we/community_post_poll',  [WeController::class, 'community_post_poll'])->name('we.community_post_poll');
  Route::post('/we/community_events',  [WeController::class, 'community_events'])->name('we.community_events');

  // * Show community form 1st stage
  Route::get('/we/create-community-main',  [WeController::class, 'create_community_main'])->name('we.create_community_main');
  // * Insert community data
  Route::post('/we/communities',  [CommunityController::class, 'insert'])->name('community.insert');
  // * Show Community Stage 2
  Route::get('/we/create-community-loggedin-stage-2',  [WeController::class, 'create_community_loggedin_stage2'])->name('we.create_community_loggedin_stage_2');
  // * Show Community Stage 3
  Route::get('/we/create-community-loggedin-stage-3',  [WeController::class, 'create_community_loggedin_stage3'])->name('we.create_community_loggedin_stage_3');;
  Route::get('/we/join_community/{com_id}',  [WeController::class, 'join_community'])->name('we.join_community');
  Route::get('/we/unfollow_community/{com_id}',  [WeController::class, 'unfollow_community'])->name('we.unfollow_community');
	// * Community post like

  Route::post('/we/community/like', [WeController::class, 'like_community'])->name('we.like_community');

  // * Community poll vote

  Route::post('/we/community/poll_vote', [WeController::class, 'poll_vote'])->name('we.poll_vote');
});


Route::get('/in-the-press',  [FrontendController::class, 'in_the_press']);
Route::get('/demo',  [FrontendController::class, 'demo']);
Route::get('/agenda',  [FrontendController::class, 'agenda']);
Route::get('/Proposed-Chief-Guest',  [FrontendController::class, 'guest_of_honour']);
Route::get('/Guest-of-Honour',  [FrontendController::class, 'guestofhonour']);
Route::get('/globalsummit2021',  [FrontendController::class, 'gobalsummit']);
Route::get('/Proposed-Chief-Guest',  [FrontendController::class, 'proposedchiefGuest']);
Route::get('/globalsummit-influencer',  [FrontendController::class, 'globalsummitInfluencer']);
Route::get('/globalsummit/profile/{id}/{name}',  [FrontendController::class, 'globalsummitprofile']);
Route::get('/sponsorship-form',  [FrontendController::class, 'partner']);
Route::post('/sponser/add',  [FrontendController::class, 'sponser_add']);
Route::get('/survey-page',  [FrontendController::class, 'survey']);
Route::get('/Sponsors-for-1000-Women-of-Asia',  [FrontendController::class, 'global_summit_sponser']);
Route::get('/jury-members',  [FrontendController::class, 'global_summit_jury']);
Route::get('/moderators',  [FrontendController::class, 'global_summit_moderator']);

Route::post('/wesurvey/add',  [FrontendController::class, 'addsurveyy']);
Route::patch('/community_update/{id}',  [AdminCommunityController::class, 'update'])->name('community.update');


//view more
Route::get('/Guest-of-Honor',  [FrontendController::class, 'guest_of_honour']);
Route::get('/Women-Faces',  [FrontendController::class, 'global_summit_faces']);
Route::get('/globalsummit-support',  [FrontendController::class, 'global_summit_support']);
Route::get('/Partners-For-1000-Women-of-Asia',  [FrontendController::class, 'global_summit_partner']);
Route::get('/Partners-for-WE-Pitch',  [FrontendController::class, 'global_sponser_wepitch']);

//womenfacesawards
Route::get('/women-faces-awards',  [FrontendController::class, 'womenfacesawards']);

//survey route
Route::get('/admin/survey1', [FrontendController::class, 'surveyshow']);
Route::get('/admin/survey1/delete/{id}', [FrontendController::class, 'delete']);
Route::get('/admin/survey1/showview/{id}', [FrontendController::class, 'showview']);
//survey2 Front route
Route::get('/surveys',  [FrontendController::class, 'survey2']);
Route::post('/wesurveys-add',  [FrontendController::class, 'addsurveys']);

//survey3 Front route
Route::get('/surveys-pg3',  [FrontendController::class, 'survey3']);
Route::post('/wesurveys-add3',  [FrontendController::class, 'addsurveys3']);

//survey2 route
Route::get('/admin/survey2', [FrontendController::class, 'surveyshow2']);
Route::get('/admin/survey2/delete/{id}', [FrontendController::class, 'delete1']);
Route::get('/admin/survey2/showview/{id}', [FrontendController::class, 'showview1']);

Route::get('/check_email', [FrontendController::class, 'check_email']);
//influencer-form routes
Route::get('/apply-for-influencer/',  [FrontendController::class, 'influencer']);
Route::post('/add/influencer/',  [FrontendController::class, 'add_influencer']);

//masteruser-form routes
Route::get('/apply-now/',  [FrontendController::class, 'masteruser']);
Route::post('/add/masteruser/',  [FrontendController::class, 'add_masteruser']);
//influencer-form 2 routes
Route::get('/apply-for-influencer/form2/{id?}',  [FrontendController::class, 'influencerform2']);
Route::post('add/influencer/form2/{id}',  [FrontendController::class, 'add_influencer2']);

//academic-form routes
Route::get('/associative-partner/{id?}',  [FrontendController::class, 'associative_partner']);
Route::post('/add/associative-partner/{id?}',  [FrontendController::class, 'add_associative_partner']);
//masteruser-form routes
Route::get('/academic-partner/{id?}',  [FrontendController::class, 'academic_partner']);
Route::post('/add/academic-partner/{id?}',  [FrontendController::class, 'add_academic_partner']);

Route::get('/blog/{seourl}', 'App\Http\Controllers\FrontendController@blog');
Route::get('/blog/{id}', 'App\Http\Controllers\FrontendController@blog');
Route::post('/save/comment', [FrontendController::class, 'blogcomment']);
Route::get('we/bloglist', [FrontendController::class, 'bloglist']);
Route::get('/we/blog/{id}',  [FrontEndBlogController::class, 'blog-details']);
Route::get('/certificateform', [CertificateController::class, 'view']);
Route::get('/certiform', [CertificateController::class, 'certiform']);
Route::post('/certiform/add', [CertificateController::class, 'certiformadd']);
Route::post('/certificatesubmit', [CertificateController::class, 'store']);
Route::get('/correction-certificate-form/{id?}', [CertificateController::class, 'correctionform']);
Route::post('/add/correction/{id}', [CertificateController::class, 'correctionformadd']);


//awardquestionnaire
Route::get('/Industry-Star-Award', [FrontendController::class, 'awardquestionnaire']);
Route::post('/questionnaire-add',  [FrontendController::class, 'add_awardquestionnaire']);
Route::get('/1000-Women-of-Asia-Winners-Form', [FrontendController::class, 'awardee_confirmation']);
Route::get('/1000-Women-of-Asia-Winners-Form2', [FrontendController::class, 'awardee_confirmation2']);
Route::post('/awardee-add',  [FrontendController::class, 'awardee_add']);
Route::post('/awardee-add2',  [FrontendController::class, 'awardee_add2']);
Route::get('/trophy',  [FrontendController::class, 'trophy']);
Route::post('/trophy-add',  [FrontendController::class, 'trophy_add']);


Route::get('/faces/login/{id?}', [FacesloginController::class, 'index']);
Route::post('/faces/loginstore', [FacesloginController::class, 'login'])->name('user.login');
// Route::post('/we/get-started2', [RegisterController::class, 'insert'])->name('we.register');
Route::post('/we/signup-step-2', [RegisterController::class, 'insertsignup'])->name('insertsignup');
Route::post('/we/signup-step-3', [RegisterController::class, 'signupstep3'])->name('signupstep3');
Route::post('/we/login', [LoginController::class, 'weloginUser'])->name('we.login23');
Route::get('/dashboard', [LoginController::class, 'dashboard']);
Route::get('/faces/register', [FacesloginController::class, 'register'])->name('faces.register');
Route::post('/faces/store', [FacesloginController::class, 'store'])->name('faces.store');

//forget/password
Route::get('/we/forget-password', [UserForgetPassword::class, 'forgetpassword']);
Route::post('/we/forget-password/recover', [UserForgetPassword::class, 'forgetpasswordrecover']);
Route::get('/we/change/password/{id}', [UserForgetPassword::class, 'changepassword']);
Route::post('/we/password/recover/{id}', [UserForgetPassword::class, 'changepasswordstore'])->name('user.passwordchange');
Route::get('/faces/forget/password', [FacesloginController::class, 'forgetpassword']);
Route::post('/faces/password/recover', [FacesloginController::class, 'forgetpasswordrecover']);
Route::get('/faces/change/password/{id}', [FacesloginController::class, 'changepassword']);
Route::post('/faces/password/recover/{id}', [FacesloginController::class, 'changepasswordstore'])->name('change.password');
// GOOGLE Login
//Route::get('login/google', [FacesloginController::class, 'redirectToGoogle'])->name('login.google');
// Route::get('login/google/callback', [FacesloginController::class, 'handleGoogleCallback']);
// Facebook Login
//Route::get('login/facebook', [FacesloginController::class, 'redirectToFacebook'])->name('login.facebook');
//Route::get('login/facebook/callback', [FacesloginController::class, 'handleFacebookCallback']);
// Linkedin Login
// Route::get('login/linkedin', [FacesloginController::class, 'redirectToLinkedin'])->name('login.linkedin');
//  Route::get('login/linkedin/callback', [FacesloginController::class, 'handleLinkedinCallback']);
Route::get('/admin/login', [AdminloginController::class, 'index']);
Route::post('/admin/loginstore', [AdminloginController::class, 'login'])->name('admin.login');
Route::get('/loginmobile', [MobileloginController::class, 'loginMobile']);
Route::get('/loginemail', [MobileloginController::class, 'loginEmail']);
Route::get('/loginotp/{id}', [MobileloginController::class, 'loginOtp']);
Route::get('/loginemailotp/{id}', [MobileloginController::class, 'loginemailOtp']);
Route::post('/mobile/store', [MobileloginController::class, 'mobileStore']);
Route::post('/email/store', [MobileloginController::class, 'emailStore']);
Route::post('/otp/store', [MobileloginController::class, 'otpStore']);
Route::post('/otpemail/store', [MobileloginController::class, 'otpemailStore']);
Route::get('/otp/resend/{id?}',  [MobileloginController::class, 'otpResend']);
Route::get('/emailotp/resend/{id?}',  [MobileloginController::class, 'emailotpResend']);
Route::get('/influencer/login', [InfluencersloginController::class, 'index']);
Route::post('/influencer/loginstore', [InfluencersloginController::class, 'login'])->name('influencer.login');
Route::get('we/confirm_account/', [RegisterController::class, 'verifymail'])->name('account.verify');
Route::get('we/confirm_account/{email}', [RegisterController::class, 'verifyaccount']);

Auth::routes();

//Auth::routes(['verify' => true]);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/mail/face/{event_id?}',  [MailController::class, 'face']);
Route::get('/jury/login', [LoginController::class, 'index']);



// GOOGLE Login
// Route::get('login/jurygoogle', [LoginController::class, 'redirectToGoogle'])->name('login.google');
// Route::get('login/google/callback', [LoginController::class, 'handleGoogleCallback']);

// Facebook Login
// Route::get('login/facebook', [LoginController::class, 'redirectToFacebook'])->name('login.juryfacebook');
// Route::get('login/facebook/callback', [LoginController::class, 'handleFacebookCallback']);

// Linkedin Login
//  Route::get('login/linkedin', [LoginController::class, 'redirectToLinkedin'])->name('login.jurylinkedin');
// Route::get('login/linkedin/callback', [LoginController::class, 'handleLinkedinCallback']);

Route::group(['prefix' => 'admin'], function () {
  Route::get('/home',  [HomeController::class, 'index'])->name('admin.dashboard');
  Route::get('/editprofile',  [HomeController::class, 'editProfile']);
  Route::post('/editprofile/update/', [HomeController::class, 'Update'])->name('update');



  //we backend route
  Route::resource('/blog', BlogController::class);
  Route::resource('/resource', ResourceController::class);
  Route::resource('/faq', FaqController::class);
  Route::resource('/incubatee', AdminIncubationController::class);
  Route::get('/faqsupportlist',  [FaqController::class, 'faqsupportlist']);
  Route::delete('/faqsupportlist/delete/{id}',  [FaqController::class, 'faqsupportlistdelete']);

  Route::resource('/mentor', MentorController::class);
  Route::resource('/careerpage', CareerpageController::class);
  Route::resource('/careerform', CareerformController::class);
  Route::resource('/ourteam', OurteamController::class);
  Route::resource('/award', AdminAwardController::class);
  Route::resource('/community', AdminCommunityController::class);
  Route::get('/community/status/{status}/{id}', [AdminCommunityController::class, 'ChangeStatus'])->name('update.status');


  //Industry-Star-Award
  Route::get('Industry-Star-Award',  [FrontendController::class, 'awardshow']);
  Route::get('awardquestionnaire/delete/{id}',  [FrontendController::class, 'deleteaward']);

  //Awardee
  Route::get('/awardee',  [AwardeeController::class, 'awardeeshow']);
  Route::get('/awardee/delete/{id}',  [AwardeeController::class, 'delete']);
  Route::put('/upload/awardee/{id}', [AwardeeController::class, 'update']);

  Route::get('/awardee/view/{id}',  [AwardeeController::class, 'trophyview']);
  Route::get('/trophy/list',  [AwardeeController::class, 'trophylist']);
  Route::get('/trophy/delete/{id}',  [AwardeeController::class, 'trophydelete']);

  Route::resource('/globalsummit', GlobalsummitController::class);
  Route::post('/globalsummit/search',  [GlobalsummitController::class, 'search']);

  Route::resource('/blog', BlogController::class);

  Route::get('/bloglist/commentlist', [BlogcommentController::class, 'blogcomment']);
  Route::get('/bloglistt/delete/{id}', [BlogcommentController::class, 'delete'])->name('bloglistt/delete');
  //Influencer Event
  Route::get('influencerevent/create', [InfluencerEventController::class, 'create']);
  Route::get('/influencerevent', [InfluencerEventController::class, 'index']);
  Route::post('/influencerevent/store', [InfluencerEventController::class, 'store']);
  Route::get('/influencerevent/{id}', [InfluencerEventController::class, 'show']);
  Route::get('/influencerevent/edit/{id}/', [InfluencerEventController::class, 'edit']);
  Route::get('/influencerevent/delete/{id}', [InfluencerEventController::class, 'delete']);
  Route::post('/influencerevent/update/{id}', [InfluencerEventController::class, 'update']);

  // Covid dashboard page Route
  Route::get('/covidcare',  [CovidHomeController::class, 'index']);

  //show payment
  Route::resource('/payment', PaymentController::class);
  Route::get('/paymentproduct/{id}', [PaymentController::class, 'showproduct']);

  // Covid dashboard page Route
  Route::get('/covidcare',  [CovidHomeController::class, 'index']);
  //Covid Enquiry
  Route::get('/covidenquirylist', [CovidcontactController::class, 'index']);
  //payment detail list route
  Route::get('/paymentdetail', [PaymentdetailController::class, 'index']);

  // Influencer Route
  Route::resource('/influencer', InfluencerController::class);
  Route::get('/influencerdetails/{id}',  [InfluencerController::class, 'view']);

  Route::get('/changeStatus',  [InfluencerController::class, 'changeStatus']);

  //Challenge  routes
  Route::get('/challengelist', [ChallengeController::class, 'index']);

  Route::get('/certificatemail', [CertificatelistController::class, 'sendmail']);

  //Banner
  Route::resource('/banner', BannerController::class);

  //certificatelist  routes
  Route::get('/certificate', [CertificatelistController::class, 'index']);
  Route::post('/certificate/excel', [CertificatelistController::class, 'certificateexcelStore']);

  //Team routes
  Route::resource('/team', TeamController::class);
  Route::get('/resetpassword/{id}', [TeamController::class, 'resetPassword']);
  Route::post('/password/update/{id}', [TeamController::class, 'passwordUpdate']);

  //Team routes
  Route::resource('/teamlevel', TeamlevelController::class);

  //summit route
  Route::resource('/summit', AdminSummitController::class);
  Route::post('/summitmailstore', [AdminSummitController::class, 'summitMail']);
  //mask routes
  Route::resource('/mask', MaskController::class);
  //Team Login
  Route::resource('/teamlogin', TeamloginController::class);

  //Template  routes
  Route::resource('/template', TemplateController::class);

  //e  newindex
  Route::get('/livelist', [NewindexController::class, 'index']);
  Route::get('/newindex/{id}', [NewindexController::class, 'indexlist']);

  //WorkController routes
  Route::get('/resellerlist', [AdminWorkController::class, 'work']);
  Route::get('/reseller/{id}',  [AdminWorkController::class, 'worklist']);

  //Mail routes
  Route::resource('/mail', MailController::class);
  // Route::get('/mail/create',  [MailController::class, 'create']);
  //Route::get('/mail/store',  [MailController::class, 'store'])->name('mail/store');
  Route::get('/maildetails/{id}',  [MailController::class, 'eventList']);

  //Sector routes
  Route::resource('/sector', SectorController::class);
  Route::get('/appreciationlist', [WarriorappreciationController::class, 'index']);
  //Sectormail routes
  Route::resource('/sectormail', SectorMailController::class);

  //City routes
  Route::resource('/city', CityController::class);

  //State routes
  Route::resource('/state', StateController::class);

  Route::resource('/campaign', CampaignController::class);

  //product routes
  Route::resource('/product', ProductController::class);
  Route::get('/pproduct/create/{id}', [ProductController::class, 'productCreate']);
  Route::get('/pproduct/{id}', [ProductController::class, 'index']);
  //Result
  Route::get('/result',  [MarkingseventController::class, 'index']);
  Route::get('/resultdetails/{id}',  [MarkingseventController::class, 'result']);
  Route::get('/commentdetails/{id}',  [MarkingseventController::class, 'commentdetails']);



  //Jury routes
  Route::resource('/jury', JuryController::class);
  Route::post('/juryexcel/store', [JuryController::class, 'juryexcelStore']);
  Route::post('/jury/search',  [JuryController::class, 'search']);

  //Marking Schema routes
  Route::resource('/markingschema', MarkingschemaController::class);

  //YoutubeLink routes
  Route::resource('/youtube', YoutubeController::class);

  //Client routes
  Route::resource('/client', ClientController::class);

  //Event routes
  Route::resource('/event', EventController::class);
  Route::get('/eventdetails/{id}',  [EventController::class, 'eventList']);
  Route::post('/youtube/store', [EventController::class, 'youtubeStore']);
  Route::post('/mail/store', [EventController::class, 'mailStore']);
 // * Normal Event
  Route::get('/normal_event/add_form',[AdminEventController::class, 'normal_event_add_form'])->name('admin.normal_event_add_form');
  Route::post('/get_cities', [AdminEventController::class, 'get_cities']);
  Route::post('/normal_event/create',[AdminEventController::class, 'create_normal_event'])->name('admin.create_normal_event');
  Route::get('/normal_event/list',[AdminEventController::class, 'list_normal_event'])->name('admin.list_normal_event');
  Route::get('/normal_event/show/{id}',[AdminEventController::class, 'show_normal_event'])->name('admin.show_normal_event');
  Route::get('/normal_event/edit_form/{id}',[AdminEventController::class, 'normal_event_edit_form'])->name('admin.normal_event_edit_form');
  Route::post('/normal_event/update/{id}',[AdminEventController::class, 'update_normal_event'])->name('admin.update_normal_event');
  
  // * Round Table Event
  Route::get('/round_table/add_form',[AdminEventController::class, 'round_table_add_form'])->name('admin.round_table_add_form');
  Route::post('/round_table/create',[AdminEventController::class, 'create_round_table'])->name('admin.create_round_table');
  Route::get('/round_table/list',[AdminEventController::class, 'list_round_table'])->name('admin.list_round_table');
  Route::get('/round_table/show/{id}',[AdminEventController::class, 'show_round_table'])->name('admin.show_round_table');
  Route::get('/round_table/edit_form/{id}',[AdminEventController::class, 'round_table_edit_form'])->name('admin.round_table_edit_form');
  Route::post('/round_table/update/{id}',[AdminEventController::class, 'update_round_table'])->name('admin.update_round_table');

  // * We Pitch Event
  Route::get('/we_pitch/add_form',[AdminEventController::class, 'we_pitch_add_form'])->name('admin.we_pitch_add_form');
  Route::post('/we_pitch/create',[AdminEventController::class, 'create_we_pitch'])->name('admin.create_we_pitch');
  Route::get('/we_pitch/list',[AdminEventController::class, 'list_we_pitch'])->name('admin.list_we_pitch');
  Route::get('/we_pitch/show/{id}',[AdminEventController::class, 'show_we_pitch'])->name('admin.show_we_pitch');
  Route::get('/we_pitch/edit_form/{id}',[AdminEventController::class, 'we_pitch_edit_form'])->name('admin.we_pitch_edit_form');
  Route::post('/we_pitch/update/{id}',[AdminEventController::class, 'update_we_pitch'])->name('admin.update_we_pitch');

  //User routes
  Route::resource('/user', UserController::class);
  Route::post('/faceexcel/store', [UserController::class, 'faceexcelStore']);
  Route::get('/userdetails/{id}',  [UserController::class, 'userList']);
  Route::get('/search',  [UserController::class, 'search']);

  //Excel routes
  Route::get('/excel',  [ExcelController::class, 'index']);
  Route::post('/excel/store', [ExcelController::class, 'store']);

  //Category routes
  Route::resource('/category', CategoryController::class);

  //Covid Warriors route
  Route::resource('/covidwarriors', CovidwarriorsController::class);

  //Contact routes
  //  Route::get('/contact', 'ContactController@index');

  // warrior appreciation list route
  Route::resource('/joinsquad', WarriorappreciationController::class);
  Route::get('/joinsquaddetails/{id}',  [WarriorappreciationController::class, 'view']);
  // campaign Controller
  Route::resource('/campaign', CampaignController::class);
  Route::get('/campaigndetail/{id}',  [CampaignController::class, 'view']);
});

Route::group(['prefix' => 'jury'], function () {
  Route::get('/home',  [JuryHomeController::class, 'index'])->name('home');
  Route::get('/eventuserlist/{id?}',  [JuryHomeController::class, 'eventuserList']);
  Route::get('/eventuserlists',  [JuryHomeController::class, 'eventuserLists']);
  Route::get('/jurycomment',  [JuryHomeController::class, 'commentedit']);
  Route::post('/jurycomment/save',  [JuryHomeController::class, 'commentsave']);
  Route::get('/eventslist',  [JuryHomeController::class, 'eventusersList']);
  Route::get('/editprofile',  [JuryHomeController::class, 'editProfile']);
  Route::post('/eventmarking/store',  [JuryHomeController::class, 'eventmarkingStore']);
  Route::post('/profile/update',  [JuryHomeController::class, 'profileUpdate']);
  Route::get('/event',  [JuryEventController::class, 'index']);
});

Route::group(['prefix' => 'faces'], function () {
  Route::get('/editprofile/{id?}',  [FacesHomeController::class, 'edit'])->name('user.profile');
});
Route::group(['prefix' => 'faces', 'middleware' => ['role']], function () {
  Route::get('/home',  [FacesHomeController::class, 'index'])->name('user.home');
  Route::post('/updateprofile/{id?}',  [FacesHomeController::class, 'updateprofile']);
  Route::get('/editfacesprofile/{id?}',  [FacesHomeController::class, 'edit'])->name('faces.profile');
  Route::resource('/blog', BlogController::class);
  Route::get('/faceslist',  [FacesHomeController::class, 'facesList']);
  Route::get('/events',  [UserEventController::class, 'index']);
  Route::get('/virtualwepitch', [FacesHomeController::class, 'create']);
  Route::post('/virtualwepitch', [FacesHomeController::class, 'store']);
});

Route::get('/challenges', [PollingController::class, 'add']);
Route::POST('/polling', [PollingController::class, 'store'])->name('polling.store');

Route::get('/womennovator-live-series', [LiveController::class, 'add']);
Route::post('live/store', [LiveController::class, 'liveStore']);

Route::get('/reseller', [WorkController::class, 'add']);
Route::post('/reseller', [WorkController::class, 'store'])->name('work.store');

//summit route
Route::get('/summit', [SummitController::class, 'add']);
Route::post('/summit', [SummitController::class, 'store'])->name('summit.store');

//partner route
Route::get('/partner', [PartnerController::class, 'add']);
Route::post('/partner/store', [PartnerController::class, 'store'])->name('partner.store');

Route::get('/certificates/{id}', [CertificateController::class, 'certificates']);


//Influencers route

Route::group(['prefix' => 'influencer'], function () {
  Route::get('/home',  [InfluencersHomeController::class, 'index'])->name('influencer.home');
  Route::get('/profile',  [InfluencersHomeController::class, 'profile'])->name('influencer.profile');
  Route::get('/personal/details',  [InfluencersHomeController::class, 'personaldetails'])->name('influencer.pr');
  Route::post('/update/{id}',  [InfluencersHomeController::class, 'update'])->name('influencer.update');

  /*Route::get('/wizard',  [WizardController::class, 'index'])->name('influencer.wizard');
Route::post('/create',  [WizardController::class, 'store']);
Route::post('/autocomplete/fetch',  [WizardController::class, 'fetch'])->name('autocomplete.fetch');
Route::post('/autocomplete/city',  [WizardController::class, 'city'])->name('autocomplete.city');
Route::post('/autocomplete/industry',  [WizardController::class, 'industry'])->name('autocomplete.industry');
Route::post('/autocomplete/qualification',  [WizardController::class, 'qualification'])->name('autocomplete.qualification');*/
  //Route::get('autocomplete', [WizardController::class, 'autocomplete'])->name('autocomplete');
  //Route::get('autocompletecity', [WizardController::class, 'autocompletecity'])->name('autocompletecity');
  //Route::get('autocompleteindustry', [WizardController::class, 'autocompleteindustry'])->name('autocompleteindustry');
});

// GOOGLE Login
Route::get('influencer/login/google', [InfluencersloginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [InfluencersloginController::class, 'handleGoogleCallback']);
//  Facebook Login
Route::get('influencer/login/facebook', [InfluencersloginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [InfluencersloginController::class, 'handleFacebookCallback']);
// Linkedin Login
Route::get('influencer/login/linkedin', [InfluencersloginController::class, 'redirectToLinkedin'])->name('login.linkedin');
Route::get('login/linkedin/callback', [InfluencersloginController::class, 'handleLinkedinCallback']);

//frontend webpage
Route::get('/', [WeController::class, 'index']);
Route::get('/apply-for/{id}', [FrontendController::class, 'applynow']);

Route::get('/influencer/juryshow', [InfluencersHomeController::class, 'jurylist']);
Route::get('/influencer/juryshow/delete/{id}', [InfluencersHomeController::class, 'delete']);
Route::get('/influencer/create/jury', [InfluencersHomeController::class, 'create']);
Route::post('/influencer/infjury/store', [InfluencersHomeController::class, 'store']);
Route::get('/influencer/juryshow/juryshow/{id}', [InfluencersHomeController::class, 'juryedit']);
Route::put('upload.document/{id}', [InfluencersHomeController::class, 'updatejury']);


//subscribe route
Route::post('form/Subscribe',  [FrontendController::class, 'Subscribe']);
Route::get('/admin/subscribe',  [FrontendController::class, 'Subscribeshow']);
Route::get('/admin/subscribe/delete/{id}',  [FrontendController::class, 'deleteshow']);
