@extends('layouts.master')
@section('content')
     <section class="d-flex h-100vh p-4 bg-black-50">
        <div class="container-fluid bg-white m-auto text- shadow p-3 rounded">
          <h1 class="mb-3">Advanced – Connect to CRM</h1>
          <h5>Connect your CRM or Lead Service to your Account</h5>
          <h5>Choose the Service you would like to connect with below and then Click ‘Add Connection’.</h5>
          <div>
            <h5 class="fw-bold">To connect:</h5>
            <ul>
              <li>Click or Tap your CRM or Lead Service from the List of Our ‘Most Popular’ Supported CRMs and Lead
                Services Below <ul>
                  <li>*If your CRM or Lead service is not listed, chances are we can still connect.</li>
                  <li>**We currently support up to 1500+ CRM and Lead Services connections.</li>
                </ul>
              </li>
              <li>Follow the instructions to find the information we need to setup your connection</li>
              <li>Then add it under the CRM or Lead Service below and Click SUBMIT</li>
              <li>Once the page reloads you are done</li>
            </ul>
          </div>
          <div class="div bg-blue p-3">
            <h5 class="fw-bold">If you do not see your CRM or Lead Service on the page below, please request it from the
              Dropdown Menu List below. We have not tested connections with ALL of these CRMs and Services on the
              Dropdown List, but can probably connect to most of them.</h5>
          </div>
          <div class="">
            <div class="row mt-3 text-start justify-content-start align-items-center request-connection py-3">
              <div class="col-4">
                <select class="form-select request-connection-select" aria-label="Default select example">
                  <option value="Choose from list below">Choose from list below</option>
                  <option value="Not in List Below">Not in List Below</option>
                  <option value="17hats">17hats</option>
                  <option value="1CRM">1CRM</option>
                  <option value="4Dem.it">4Dem.it</option>
                  <option value="Act!">Act!</option>
                  <option value="Action Network">Action Network</option>
                  <option value="ActiveCampaign">ActiveCampaign</option>
                  <option value="ActiveDEMAND">ActiveDEMAND</option>
                  <option value="ActiveTrail">ActiveTrail</option>
                  <option value="Act-On">Act-On</option>
                  <option value="AdviserLogic">AdviserLogic</option>
                  <option value="Affinity">Affinity</option>
                  <option value="Agendize">Agendize</option>
                  <option value="Agendor">Agendor</option>
                  <option value="Agent 3000">Agent 3000</option>
                  <option value="Agent Legend">Agent Legend</option>
                  <option value="AgentMarketing Leads">AgentMarketing Leads</option>
                  <option value="Agentology">Agentology</option>
                  <option value="Agile CRM">Agile CRM</option>
                  <option value="Aimtell">Aimtell</option>
                  <option value="AIVA">AIVA</option>
                  <option value="Akna">Akna</option>
                  <option value="Albacross">Albacross</option>
                  <option value="All Clients">All Clients</option>
                  <option value="Ally Hub">Ally Hub</option>
                  <option value="Alore CRM">Alore CRM</option>
                  <option value="amoCRM">amoCRM</option>
                  <option value="Amped">Amped</option>
                  <option value="Ampliz">Ampliz</option>
                  <option value="AppsForOps Timeline">AppsForOps Timeline</option>
                  <option value="Arthur Online">Arthur Online</option>
                  <option value="Attach">Attach</option>
                  <option value="Automational">Automational</option>
                  <option value="Automizy">Automizy</option>
                  <option value="Autopilot">Autopilot</option>
                  <option value="Autotask">Autotask</option>
                  <option value="AWeber">AWeber</option>
                  <option value="awork">awork</option>
                  <option value="BannerSeason">BannerSeason</option>
                  <option value="Bappo">Bappo</option>
                  <option value="Batchbook">Batchbook</option>
                  <option value="Beekeeper">Beekeeper</option>
                  <option value="Benchmark Email">Benchmark Email</option>
                  <option value="Betasend">Betasend</option>
                  <option value="Bmby">Bmby</option>
                  <option value="Boingnet">Boingnet</option>
                  <option value="Bombbomb">Bombbomb</option>
                  <option value="BombBomb.com">BombBomb.com</option>
                  <option value="Bonusly">Bonusly</option>
                  <option value="BookingSync">BookingSync</option>
                  <option value="BoomTown">BoomTown</option>
                  <option value="Booqable">Booqable</option>
                  <option value="Brand Gaming">Brand Gaming</option>
                  <option value="BrandMentions">BrandMentions</option>
                  <option value="Brivity">Brivity</option>
                  <option value="Bucket.io">Bucket.io</option>
                  <option value="Builderall Mailingboss">Builderall Mailingboss</option>
                  <option value="Bullhorn CRM">Bullhorn CRM</option>
                  <option value="Call Loop">Call Loop</option>
                  <option value="Campaign Monitor">Campaign Monitor</option>
                  <option value="Campaign1to1">Campaign1to1</option>
                  <option value="Campayn">Campayn</option>
                  <option value="Capsule CRM">Capsule CRM</option>
                  <option value="Carma Marketing Hub">Carma Marketing Hub</option>
                  <option value="Chatforma">Chatforma</option>
                  <option value="Chatter">Chatter</option>
                  <option value="CINC">CINC</option>
                  <option value="Circuit">Circuit</option>
                  <option value="Clevertim CRM">Clevertim CRM</option>
                  <option value="ClickFunnels">ClickFunnels</option>
                  <option value="Client Dispute Manag">Client Dispute Manag</option>
                  <option value="ClientSuccess">ClientSuccess</option>
                  <option value="ClinchPad">ClinchPad</option>
                  <option value="Close">Close</option>
                  <option value="Cloud Attract">Cloud Attract</option>
                  <option value="Cloze">Cloze</option>
                  <option value="CompanyHub">CompanyHub</option>
                  <option value="Confluence Cloud">Confluence Cloud</option>
                  <option value="Confluence Server">Confluence Server</option>
                  <option value="ConnectWise Manage">ConnectWise Manage</option>
                  <option value="Constant Contact">Constant Contact</option>
                  <option value="Contactually">Contactually</option>
                  <option value="Contentools">Contentools</option>
                  <option value="ConvergeHub">ConvergeHub</option>
                  <option value="ConvertKit">ConvertKit</option>
                  <option value="Convo">Convo</option>
                  <option value="Copper">Copper</option>
                  <option value="Createsend">Createsend</option>
                  <option value="CRM Connector">CRM Connector</option>
                  <option value="Crugo">Crugo</option>
                  <option value="Curated">Curated</option>
                  <option value="Customer.io">Customer.io</option>
                  <option value="CustomerLabs">CustomerLabs</option>
                  <option value="Cyberimpact">Cyberimpact</option>
                  <option value="Daylite">Daylite</option>
                  <option value="DealMachine">DealMachine</option>
                  <option value="Delivra">Delivra</option>
                  <option value="Digistore24">Digistore24</option>
                  <option value="Dinamize">Dinamize</option>
                  <option value="Direct Mail">Direct Mail</option>
                  <option value="Displet">Displet</option>
                  <option value="Doppler">Doppler</option>
                  <option value="dotdigital">dotdigital</option>
                  <option value="Dotloop">Dotloop</option>
                  <option value="Drip">Drip</option>
                  <option value="EASI'R">EASI'R</option>
                  <option value="EasyMe">EasyMe</option>
                  <option value="EasyWebinar">EasyWebinar</option>
                  <option value="eEndorsements">eEndorsements</option>
                  <option value="E-goi">E-goi</option>
                  <option value="EmailOctopus">EmailOctopus</option>
                  <option value="Emma">Emma</option>
                  <option value="EngageBay Marketing">EngageBay Marketing</option>
                  <option value="eSputnik">eSputnik</option>
                  <option value="essensys Operate">essensys Operate</option>
                  <option value="ExpressPigeon">ExpressPigeon</option>
                  <option value="Fastbase">Fastbase</option>
                  <option value="FeedBlitz">FeedBlitz</option>
                  <option value="Fidelizador">Fidelizador</option>
                  <option value="Flexie CRM">Flexie CRM</option>
                  <option value="Follow Up Boss">Follow Up Boss</option>
                  <option value="FollowUp.cc">FollowUp.cc</option>
                  <option value="Fomo">Fomo</option>
                  <option value="ForceManager">ForceManager</option>
                  <option value="Frame.io">Frame.io</option>
                  <option value="FreeAgent CRM">FreeAgent CRM</option>
                  <option value="FreshMail">FreshMail</option>
                  <option value="Freshsales">Freshsales</option>
                  <option value="Genoo">Genoo</option>
                  <option value="GetResponse">GetResponse</option>
                  <option value="GetSwift">GetSwift</option>
                  <option value="Gist">Gist</option>
                  <option value="Goodbits">Goodbits</option>
                  <option value="Google Contacts">Google Contacts</option>
                  <option value="Google Groups">Google Groups</option>
                  <option value="Google Sheets">Google Sheets</option>
                  <option value="GoSquared">GoSquared</option>
                  <option value="GreenRope">GreenRope</option>
                  <option value="Gripp">Gripp</option>
                  <option value="Gro CRM">Gro CRM</option>
                  <option value="Happy Grasshopper">Happy Grasshopper</option>
                  <option value="Hatchbuck">Hatchbuck</option>
                  <option value="Hello Bar">Hello Bar</option>
                  <option value="HelloAlex">HelloAlex</option>
                  <option value="HighLevel">HighLevel</option>
                  <option value="Highrise">Highrise</option>
                  <option value="Hive">Hive</option>
                  <option value="Hiver">Hiver</option>
                  <option value="Hubspot">Hubspot</option>
                  <option value="HubSpot CRM">HubSpot CRM</option>
                  <option value="iContact">iContact</option>
                  <option value="iContact Pro">iContact Pro</option>
                  <option value="IDX Leads">IDX Leads</option>
                  <option value="iHomefinder">iHomefinder</option>
                  <option value="Imax CRM">Imax CRM</option>
                  <option value="Inbound Now">Inbound Now</option>
                  <option value="InforUMobile">InforUMobile</option>
                  <option value="Infusionsoft">Infusionsoft</option>
                  <option value="Infusionsoft by Keap">Infusionsoft by Keap</option>
                  <option value="INinbox">INinbox</option>
                  <option value="Insightly">Insightly</option>
                  <option value="Instabot: Chatbot Platform">Instabot: Chatbot Platform</option>
                  <option value="Interakt">Interakt</option>
                  <option value="Intercom">Intercom</option>
                  <option value="inwise">inwise</option>
                  <option value="Iterable">Iterable</option>
                  <option value="Ixact Contact Solutions">Ixact Contact Solutions</option>
                  <option value="Jarja Media">Jarja Media</option>
                  <option value="JivoChat">JivoChat</option>
                  <option value="JobNimbus">JobNimbus</option>
                  <option value="Jumplead">Jumplead</option>
                  <option value="JVZoo">JVZoo</option>
                  <option value="KarmaCRM">KarmaCRM</option>
                  <option value="Keller Williams Command">Keller Williams Command</option>
                  <option value="Kirim.Email">Kirim.Email</option>
                  <option value="Klaviyo">Klaviyo</option>
                  <option value="Klick-Tipp">Klick-Tipp</option>
                  <option value="KonnektiveCRM">KonnektiveCRM</option>
                  <option value="Kunversion">Kunversion</option>
                  <option value="Kunversion+">Kunversion+</option>
                  <option value="KvCore">KvCore</option>
                  <option value="Kyvio">Kyvio</option>
                  <option value="LAHAR">LAHAR</option>
                  <option value="Landbot">Landbot</option>
                  <option value="LassoCRM">LassoCRM</option>
                  <option value="Lead Closer">Lead Closer</option>
                  <option value="Leadberry">Leadberry</option>
                  <option value="LeadExpress">LeadExpress</option>
                  <option value="Leadfeeder">Leadfeeder</option>
                  <option value="LeadFlip">LeadFlip</option>
                  <option value="LeadMailbox">LeadMailbox</option>
                  <option value="LeadOutcome">LeadOutcome</option>
                  <option value="LeadOwl">LeadOwl</option>
                  <option value="Leadpages">Leadpages</option>
                  <option value="leadPops">leadPops</option>
                  <option value="LeadSimple">LeadSimple</option>
                  <option value="LeadSquared">LeadSquared</option>
                  <option value="lemlist">lemlist</option>
                  <option value="LIME Go">LIME Go</option>
                  <option value="LionDesk">LionDesk</option>
                  <option value="Listing Booster">Listing Booster</option>
                  <option value="Listings To Leads">Listings To Leads</option>
                  <option value="Livespace">Livespace</option>
                  <option value="LumApps">LumApps</option>
                  <option value="Mad Mimi">Mad Mimi</option>
                  <option value="Magnetic">Magnetic</option>
                  <option value="MailboxValidator">MailboxValidator</option>
                  <option value="Mailchimp">Mailchimp</option>
                  <option value="MailerLite">MailerLite</option>
                  <option value="Mailigen">Mailigen</option>
                  <option value="Mailjet">Mailjet</option>
                  <option value="MailMojo">MailMojo</option>
                  <option value="MailMunch">MailMunch</option>
                  <option value="MailPlatform">MailPlatform</option>
                  <option value="Mailshake">Mailshake</option>
                  <option value="MailUp">MailUp</option>
                  <option value="Makesbridge">Makesbridge</option>
                  <option value="MangoApps">MangoApps</option>
                  <option value="Marketo">Marketo</option>
                  <option value="MarketVolt">MarketVolt</option>
                  <option value="MasterBase">MasterBase</option>
                  <option value="Mattermost">Mattermost</option>
                  <option value="Mautic">Mautic</option>
                  <option value="Maximizer (Canada)">Maximizer (Canada)</option>
                  <option value="MeetingKing">MeetingKing</option>
                  <option value="Mercury Connect">Mercury Connect</option>
                  <option value="Microsoft Dynamics 3">Microsoft Dynamics 3</option>
                  <option value="Mingdao">Mingdao</option>
                  <option value="Mirabel's Marketing">Mirabel's Marketing</option>
                  <option value="Miro">Miro</option>
                  <option value="MobileMonkey">MobileMonkey</option>
                  <option value="MOBIT">MOBIT</option>
                  <option value="MOCO">MOCO</option>
                  <option value="Mojo">Mojo</option>
                  <option value="MoonMail">MoonMail</option>
                  <option value="Moosend">Moosend</option>
                  <option value="Moskit">Moskit</option>
                  <option value="Moxtra">Moxtra</option>
                  <option value="MyBizzMail">MyBizzMail</option>
                  <option value="MyWiFi Networks">MyWiFi Networks</option>
                  <option value="Nearby Now">Nearby Now</option>
                  <option value="NeonCRM">NeonCRM</option>
                  <option value="NetHunt CRM">NetHunt CRM</option>
                  <option value="Newsman">Newsman</option>
                  <option value="NiceJob">NiceJob</option>
                  <option value="NiftyImages">NiftyImages</option>
                  <option value="Nimble">Nimble</option>
                  <option value="noCRM.io">noCRM.io</option>
                  <option value="NorthStar by GrowthHackers">NorthStar by GrowthHackers</option>
                  <option value="Noticeable">Noticeable</option>
                  <option value="Nutshell">Nutshell</option>
                  <option value="Odoo CRM">Odoo CRM</option>
                  <option value="Odoo ERP Self Hosted">Odoo ERP Self Hosted</option>
                  <option value="Omnisend">Omnisend</option>
                  <option value="OneLocal ContactHub">OneLocal ContactHub</option>
                  <option value="OneLocal ReferralMag">OneLocal ReferralMag</option>
                  <option value="OnePageCRM">OnePageCRM</option>
                  <option value="Ontraport">Ontraport</option>
                  <option value="Opesta">Opesta</option>
                  <option value="OptinMonster">OptinMonster</option>
                  <option value="ORBTR">ORBTR</option>
                  <option value="Otixo">Otixo</option>
                  <option value="Paperless Pipeline">Paperless Pipeline</option>
                  <option value="Pardot">Pardot</option>
                  <option value="PartnerStack">PartnerStack</option>
                  <option value="Perfect Storm">Perfect Storm</option>
                  <option value="PersistIQ">PersistIQ</option>
                  <option value="Perspective">Perspective</option>
                  <option value="Pipedrive">Pipedrive</option>
                  <option value="PipelineDeals">PipelineDeals</option>
                  <option value="Pipeliner">Pipeliner</option>
                  <option value="Platform.ly">Platform.ly</option>
                  <option value="Plezi">Plezi</option>
                  <option value="Pobuca Connect">Pobuca Connect</option>
                  <option value="Podio">Podio</option>
                  <option value="Postalytics">Postalytics</option>
                  <option value="Powrbot">Powrbot</option>
                  <option value="Privy">Privy</option>
                  <option value="Pro Agent Solutions">Pro Agent Solutions</option>
                  <option value="ProAgentWebsites.com">ProAgentWebsites.com</option>
                  <option value="Proof">Proof</option>
                  <option value="Prospect.io">Prospect.io</option>
                  <option value="pulseM">pulseM</option>
                  <option value="Pure360">Pure360</option>
                  <option value="Qortex">Qortex</option>
                  <option value="Quentn">Quentn</option>
                  <option value="QuickMail.io">QuickMail.io</option>
                  <option value="Rare.io">Rare.io</option>
                  <option value="RD Station">RD Station</option>
                  <option value="ReachMail">ReachMail</option>
                  <option value="Real Estate Webmasters">Real Estate Webmasters</option>
                  <option value="Real Geeks">Real Geeks</option>
                  <option value="Real Magnet">Real Magnet</option>
                  <option value="Really Simple System">Really Simple System</option>
                  <option value="RealScout">RealScout</option>
                  <option value="Realty Juggler">Realty Juggler</option>
                  <option value="Realvolve">Realvolve</option>
                  <option value="Rebrandly">Rebrandly</option>
                  <option value="Redtail CRM">Redtail CRM</option>
                  <option value="Referral Rock">Referral Rock</option>
                  <option value="REIPro">REIPro</option>
                  <option value="Remarkety">Remarkety</option>
                  <option value="Reply">Reply</option>
                  <option value="Replyify">Replyify</option>
                  <option value="Repsly">Repsly</option>
                  <option value="Responder">Responder</option>
                  <option value="Revamp CRM">Revamp CRM</option>
                  <option value="RevBoss">RevBoss</option>
                  <option value="Revue">Revue</option>
                  <option value="Rezora">Rezora</option>
                  <option value="Robly">Robly</option>
                  <option value="RocketResponder">RocketResponder</option>
                  <option value="RollWorks">RollWorks</option>
                  <option value="Route">Route</option>
                  <option value="Salesflare">Salesflare</option>
                  <option value="Salesforce">Salesforce</option>
                  <option value="SalesforceIQ">SalesforceIQ</option>
                  <option value="Salesmachine">Salesmachine</option>
                  <option value="Salesmate">Salesmate</option>
                  <option value="SalesRabbit">SalesRabbit</option>
                  <option value="SalesTarget">SalesTarget</option>
                  <option value="SalesUp!">SalesUp!</option>
                  <option value="Salpo CRM">Salpo CRM</option>
                  <option value="Samepage">Samepage</option>
                  <option value="SAP Jam Collaboration">SAP Jam Collaboration</option>
                  <option value="Sarbacane">Sarbacane</option>
                  <option value="Scoro">Scoro</option>
                  <option value="SE Ranking">SE Ranking</option>
                  <option value="Seg">Seg</option>
                  <option value="Sellf">Sellf</option>
                  <option value="Sellsy">Sellsy</option>
                  <option value="SendFox">SendFox</option>
                  <option value="SendGrid">SendGrid</option>
                  <option value="Sendicate">Sendicate</option>
                  <option value="Sendinblue">Sendinblue</option>
                  <option value="Sendlane">Sendlane</option>
                  <option value="Sendmsg">Sendmsg</option>
                  <option value="SendX">SendX</option>
                  <option value="Sendy">Sendy</option>
                  <option value="SeoToaster">SeoToaster</option>
                  <option value="Sezion">Sezion</option>
                  <option value="SharpSpring">SharpSpring</option>
                  <option value="Showcase IDX">Showcase IDX</option>
                  <option value="Sign-Up.to">Sign-Up.to</option>
                  <option value="Smoove">Smoove</option>
                  <option value="Solve CRM">Solve CRM</option>
                  <option value="Spacio">Spacio</option>
                  <option value="Spark Membership">Spark Membership</option>
                  <option value="Spiro">Spiro</option>
                  <option value="Spoke">Spoke</option>
                  <option value="Spotio">Spotio</option>
                  <option value="Stannp">Stannp</option>
                  <option value="Stormboard">Stormboard</option>
                  <option value="StoryChief">StoryChief</option>
                  <option value="Streak">Streak</option>
                  <option value="StreamSend">StreamSend</option>
                  <option value="StreetText">StreetText</option>
                  <option value="SugarCRM">SugarCRM</option>
                  <option value="SugarCRM 6.2-5">SugarCRM 6.2-5</option>
                  <option value="SugarCRM 7+">SugarCRM 7+</option>
                  <option value="SuperOffice CRM">SuperOffice CRM</option>
                  <option value="Surefire CRM">Surefire CRM</option>
                  <option value="Survey Funnel">Survey Funnel</option>
                  <option value="Survicate">Survicate</option>
                  <option value="SweepBright">SweepBright</option>
                  <option value="SweetAssist">SweetAssist</option>
                  <option value="TailoredMail">TailoredMail</option>
                  <option value="talkSpirit">talkSpirit</option>
                  <option value="Tars">Tars</option>
                  <option value="Teamgate">Teamgate</option>
                  <option value="TeamGram">TeamGram</option>
                  <option value="Teamleader">Teamleader</option>
                  <option value="TeamWave">TeamWave</option>
                  <option value="Tettra">Tettra</option>
                  <option value="TextMagic">TextMagic</option>
                  <option value="Thankster">Thankster</option>
                  <option value="Thryv">Thryv</option>
                  <option value="Top Producer">Top Producer</option>
                  <option value="Total Expert">Total Expert</option>
                  <option value="Totango">Totango</option>
                  <option value="TPNI Engage">TPNI Engage</option>
                  <option value="TractionNext">TractionNext</option>
                  <option value="TRIBUS CRM">TRIBUS CRM</option>
                  <option value="TrueSaaS">TrueSaaS</option>
                  <option value="Tubular">Tubular</option>
                  <option value="Unisender">Unisender</option>
                  <option value="Upcall">Upcall</option>
                  <option value="UpCity">UpCity</option>
                  <option value="UPilot">UPilot</option>
                  <option value="Upwork">Upwork</option>
                  <option value="UserEngage">UserEngage</option>
                  <option value="Vainu.io">Vainu.io</option>
                  <option value="VBOUT">VBOUT</option>
                  <option value="Verizon Media Native Ads">Verizon Media Native Ads</option>
                  <option value="Verloop">Verloop</option>
                  <option value="VerticalResponse">VerticalResponse</option>
                  <option value="Vextras">Vextras</option>
                  <option value="Vision6">Vision6</option>
                  <option value="Visitor Queue">Visitor Queue</option>
                  <option value="VisitorTrack">VisitorTrack</option>
                  <option value="Visual Lease">Visual Lease</option>
                  <option value="Vtiger CRM">Vtiger CRM</option>
                  <option value="Wealthbox CRM">Wealthbox CRM</option>
                  <option value="Web CEO">Web CEO</option>
                  <option value="webCRM">webCRM</option>
                  <option value="WebinarGeek">WebinarGeek</option>
                  <option value="Websand">Websand</option>
                  <option value="WhatConverts">WhatConverts</option>
                  <option value="Wimi">Wimi</option>
                  <option value="Wintouch 7">Wintouch 7</option>
                  <option value="Wise Agent CRM">Wise Agent CRM</option>
                  <option value="Wisembly Jam">Wisembly Jam</option>
                  <option value="Woodpecker.co">Woodpecker.co</option>
                  <option value="Workbooks CRM">Workbooks CRM</option>
                  <option value="Yalla">Yalla</option>
                  <option value="Yammer">Yammer</option>
                  <option value="Zapier">Zapier</option>
                  <option value="Zaxaa">Zaxaa</option>
                  <option value="Zendesk Sell">Zendesk Sell</option>
                  <option value="Zillow Tech Connect">Zillow Tech Connect</option>
                  <option value="zipForm Plus">zipForm Plus</option>
                  <option value="Zipzappo">Zipzappo</option>
                  <option value="Zoho Campaigns">Zoho Campaigns</option>
                  <option value="Zoho CRM">Zoho CRM</option>
                </select>
              </div>
              <div class="col-3 not-in-list-below px-2">
                <input type="text" id="" name="Your CRM Name" placeholder="Your CRM Name" value="" required="">
              </div>
              <div class="col-4">
                <button class="btn btn-primary px-5" type="submit" name="">
                  <h3 class="mb-0">REQUEST CONNECTION</h3>
                </button>
              </div>
            </div>
          </div>
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <!-- 1 Open House Wizard - Custom Connection-->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                  <div class="col-11"> Open House Wizard - Custom Connection <br>
                    <img src="{{url('assets/images/custom.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse show"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <h4 class="">The Custom Connection should only be used if you are instructed to do so by Support. This
                    connection requires a one time connection to your CRM or Lead Service account to allow Open House
                    Sign-in Leads to be accepted...</h4>
                  <div class="d-flex my-3">
                    <div class="me-3">
                      <img class="img-fluid" src="{{url('assets/images/padlock.png')}}" alt="">
                    </div>
                    <div class="">
                      <h6 class="fw-bold">NOTE: Even though the Open House Wizard website is secured, any outside
                        account passwords provided here are not stored on our website, they are used once to connect
                        your Open House Wizard Account to your CRM Account. </h6>
                      <h5>Please fill in your info using the form below then click SUBMIT.</h5>
                      <p>(This only needs to be done once, if you change the password you can return here to update it.)
                      </p>
                    </div>
                  </div>
                  <form action="" class="border-dashed-black p-3">
                    <div class="row justify-content-center mb-3">
                      <h3>Custom CRM Connection Info</h3>
                      <div class="col-6 mb-3">
                        <label class="text-left" for="Login name or Email Address">Login name or Email Address</label>
                        <input type="text" id="" name="" placeholder="Login name, ID or Email" required="">
                      </div>
                      <div class="col-6 mb-3">
                        <label class="text-left" for="anything">Open Date/Time or anything</label>
                        <input type="text" id="anything" name="anything" placeholder="Password" required="">
                      </div>
                      <div class="col-6 mb-3">
                        <label class="text-left" for="">API Key if Instructed by Support paste it here</label>
                        <input type="text" id="state" name="Before-Price" placeholder="" required="">
                        <p>If using an API key then Login and Password are not required.</p>
                      </div>
                      <div class="col-6 mb-3">
                        <label class="text-left" for="Price">CRM or Lead Service Name</label>
                        <input type="text" id="Price" name="Price" placeholder="" required>
                      </div>
                    </div>
                    <div class="col-4 m-auto text-center">
                      <button class="btn btn-primary px-5" type="submit" name="">
                        <h3 class="mb-0">SUBMIT</h3>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- 2 Active Campaign -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  <div class="col-11"> Active Campaign <br>
                    <img src="{{url('assets/images/active-campaign.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <h4 class="my-3">CRM Active Campaign - How to find your API Key & API Url.</h4>
                  <div>
                    <h5>Your API Key & API Url are required for us to setup your integration to your Open House Sign In
                      Page. So, follow the steps below to find them, then paste it into the box below & click Submit.
                    </h5>
                    <h4 class="fw-bold">Instructions:</h4>
                    <h5>Login to your ActiveCampaign account; click "My Settings" in your account menu, then click the
                      "Developer" tab. Ex.: https://your_account.api-us1.com.</h5>
                  </div>
                  <div class="col-12">
                    <form action="" class="border-dashed-black p-3 my-3">
                      <div class="row justify-content-center mb-3">
                        <h3>Custom CRM Connection Info</h3>
                        <div class="col-6 mb-3">
                          <label class="text-left"
                            for="Paste your the info noted above here (Api Key, Leads Email Address, etc.)">Paste your
                            the info noted above here (Api Key, Leads Email Address, etc.)</label>
                          <input type="text"
                            id="Paste your the info noted above here (Api Key, Leads Email Address, etc.)" name=""
                            placeholder="Paste your information here to add it to your account." required="">
                        </div>
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">If Asked to provide an API Url or Website Url in Addition to
                            an API Key - Please paste it here.</label>
                          <input type="text" id="" name=""
                            placeholder="Paste your information here to add it to your account." required="">
                        </div>
                      </div>
                      <div class="col-4 m-auto text-center">
                        <button class="btn btn-primary px-5" type="submit" name="">
                          <h3 class="mb-0">SUBMIT</h3>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- 3 Agent Legend -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  <div class="col-11"> Agent Legend <br>
                    <img src="{{url('assets/images/agent-legend.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <h4 class="mb-3">Agent Legend requires a one time connection to your Open House Wizard Account to
                    allow Open House Sign-in Leads to be accepted...</h4>
                  <div class="d-flex my-3">
                    <div class="me-3">
                      <img class="img-fluid" src="{{url('assets/images/padlock.png')}}" alt="">
                    </div>
                    <div class="">
                      <h6 class="fw-bold">NOTE: Even though the Open House Wizard website is secured, any outside
                        account passwords provided here are not stored on our website, they are used once to connect
                        your Open House Wizard Account to your CRM Account.</h6>
                      <h5>Please fill in your info using the form below then click SUBMIT.</h5>
                      <p>(This only needs to be done once, if you change the password you can return here to update it.)
                      </p>
                    </div>
                  </div>
                  <div class="col-12">
                    <form action="" class="border-dashed-black p-3">
                      <div class="row justify-content-center mb-3">
                        <h3>Agent Legend Info</h3>
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">Login name or Email Address</label>
                          <input type="text" id="" name="" placeholder="Login name, ID or Email" required="">
                        </div>
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">Password</label>
                          <input type="text" id="" name=""
                            placeholder="Password, used once to connect but will not be stored here." required="">
                        </div>
                      </div>
                      <div class="col-4 m-auto text-center">
                        <button class="btn btn-primary px-5" type="submit" name="">
                          <h3 class="mb-0">SUBMIT</h3>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- 4 Aiva -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                  <div class="col-11"> Aiva <br>
                    <img class="img-fluid" src="{{url('assets/images/aiva.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <h4 class="mb-3">Aiva - How to find your Leads Email Address.</h4>
                  <h5>If you are using AIVA your unique Aiva Leads Email Address is required for us to setup your
                    integration to your Open House Sign In Page. So, follow the steps below to find that email address,
                    then paste it into the box below & click Submit.</h5>
                  <div class="col-12">
                    <form action="" class="border-dashed-black p-3 my-3">
                      <div class="d-flex align-items-end justify-content-start mb-3">
                        <div class="me-2">
                          <label class="text-left" for="">Paste your the info noted above here (Api Key, Leads Email
                            Address, etc.)</label>
                          <input type="text" id="" name=""
                            placeholder="Paste your information here to add it to your account." required="">
                        </div>
                        <div>
                          <button class="btn btn-primary px-5" type="submit" name="">
                            <h3 class="mb-0">SUBMIT</h3>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="mb-4">
                    <h4 class="fw-bold">Instructions:</h4>
                    <h5 class="fw-bold mb-3">1. Login to AIVA</h5>
                    <img class="img-fluid w-100" src="{{url('assets/images/step1-1.png')}}" alt="">
                  </div>
                  <div class="mb-4">
                    <h5 class="fw-bold mb-3">2. From the Main Screen - Click on the round gear 'Settings' item on the
                      left navigation menu</h5>
                    <img class="img-fluid w-100" src="{{url('assets/images/step2-2.png')}}" alt="">
                  </div>
                  <div class="mb-4">
                    <h5 class="fw-bold mb-3">3. Copy the email address shown under the 'CONCIERGE EMAIL' heading.</h5>
                  </div>
                </div>
              </div>
            </div>
            <!-- 5 AllClients CRM -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseFivee" aria-expanded="false" aria-controls="flush-collapseFivee">
                  <div class="col-11"> AllClients CRM <br>
                    <img class="img-fluid" src="{{url('assets/images/AllClients.jpg')}}" alt="" />
                  </div>
                </button>
              </h2>
              <div id="flush-collapseFivee" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <h4 class="mb-3">AllClients CRM - How to find your Account ID & API Key.</h4>
                  <h5>Your Account ID & API Key are required for us to setup your integration to your Open House Sign-In
                    Page. So, follow the steps below to find them, then paste it into the box below & click Submit.</h5>
                  <h4 class="fw-bold">Instructions:</h4>
                  <h5>Login to your AllClients account; then go to SETTINGS > API SETTINGS "My Settings" and there you
                    will find your Account ID and your API Key</h5>
                  <div class="col-12">
                    <form action="" class="border-dashed-black p-3 my-3">
                      <div class="row justify-content-center mb-3">
                        <h3>Custom CRM Connection Info</h3>
                        <div class="col-6 mb-3">
                          <label class="text-left" for="Your Account ID">Your Account ID</label>
                          <input type="text" id="" name=""
                            placeholder="Paste your information here to add it to your account." required="">
                        </div>
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">Your API Key</label>
                          <input type="text" id="" name=""
                            placeholder="Paste your information here to add it to your account." required="">
                        </div>
                      </div>
                      <div class="col-4 m-auto text-center">
                        <button class="btn btn-primary px-5" type="submit" name="">
                          <h3 class="mb-0">SUBMIT</h3>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- 6 Bombbomb -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                  <div class="col-11"> Bombbomb <br>
                    <img class="img-fluid" src="{{url('assets/images/BOMBBOMB.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <h4 class="mb-3">Email Marketing - Bombbomb - How to find your API Key.</h4>
                  <h5>If you are using Bombbomb your Bombbomb API Key is required for us to setup your integration to
                    your Open House Sign In Page. So, follow the steps below to find that API Key, then paste it into
                    the box below & click Submit.</h5>
                  <div class="col-12">
                    <form action="" class="border-dashed-black p-3 my-3">
                      <div class="d-flex align-items-end justify-content-start mb-3">
                        <div class="me-2">
                          <label class="text-left" for="">Paste your the info noted above here (Api Key, Leads Email
                            Address, etc.)</label>
                          <input type="text" id="" name=""
                            placeholder="Paste your information here to add it to your account." required="">
                        </div>
                        <div>
                          <button class="btn btn-primary px-5" type="submit" name="">
                            <h3 class="mb-0">SUBMIT</h3>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="mb-4">
                    <h4 class="fw-bold">Instructions:</h4>
                    <h5 class="fw-bold mb-3">1. Login to Bombbomb</h5>
                    <img class="img-fluid w-100" src="{{url('assets/images/Step1-5.png')}}" alt="">
                  </div>
                  <div class="mb-4">
                    <h5 class="fw-bold mb-3">2. Click on the down arrow to view the menu on the upper right screen (next
                      to your name) & choose the 'Integrations' item</h5>
                    <img class="img-fluid w-100" src="{{url('assets/images/Step2-3.png')}}" alt="">
                  </div>
                  <div class="mb-4">
                    <h5 class="fw-bold mb-3">3. You will see the API Key (letters, numbers and dashes), highlight the
                      key (or click the copy to clipboard option in orange) and copy it.</h5>
                  </div>
                </div>
              </div>
            </div>
            <!-- 7 Boomtown! -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseSevenn" aria-expanded="false" aria-controls="flush-collapseSevenn">
                  <div class="col-11"> Boomtown! <br>
                    <img class="img-fluid" src="{{url('assets/images/BOOMTOWN.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapseSevenn" class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <h4 class="mb-3">Boomtown! requires a one time connection to your Open House Wizard Account to allow
                    Open House Sign-in Leads to be accepted...</h4>
                  <div class="d-flex my-3">
                    <div class="me-3">
                      <img class="img-fluid" src="{{url('assets/images/padlock.png')}}" alt="">
                    </div>
                    <div class="">
                      <h6 class="fw-bold">NOTE: Even though the Open House Wizard website is secured, any outside
                        account passwords provided here are not stored on our website, they are used once to connect
                        your Open House Wizard Account to your CRM Account.</h6>
                      <h5>Please fill in your info using the form below then click SUBMIT.</h5>
                      <p>(This only needs to be done once, if you change the password you can return here to update it.)
                      </p>
                    </div>
                  </div>
                  <div class="col-12">
                    <form action="" class="border-dashed-black p-3 my-3">
                      <div class="row justify-content-center mb-3">
                        <h3>Boomtown Info</h3>
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">Login name or Email Address</label>
                          <input type="text" id="" name="" placeholder="Login name, ID or Email" required="">
                        </div>
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">Password</label>
                          <input type="text" id="" name=""
                            placeholder="Password, used once to connect but will not be stored here." required="">
                        </div>
                      </div>
                      <div class="col-4 m-auto text-center">
                        <button class="btn btn-primary px-5" type="submit" name="">
                          <h3 class="mb-0">SUBMIT</h3>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- 8 Brivity-->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                  <div class="col-11"> Brivity <br>
                    <img class="img-fluid" src="{{url('assets/images/Brivity.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <h4 class="mb-3">Brivity - How to find your API Key.</h4>
                  <h5>If you are using Brivity, your Brivity API Key is required for us to setup your integration to
                    your Open House Sign In Page. So, follow the steps below to find that API Key, then paste it into
                    the box below & click Submit.</h5>
                  <h4 class="fw-bold">Instructions:</h4>
                  <h5>You can find your account's API key in your Account Settings.</h5>
                  <div class="col-12">
                    <form action="" class="border-dashed-black p-3 my-3">
                      <div class="d-flex align-items-end justify-content-start mb-3">
                        <div class="me-2">
                          <label class="text-left" for="">Paste your the info noted above here (Api Key, Leads Email
                            Address, etc.)</label>
                          <input type="text" id="" name=""
                            placeholder="Paste your information here to add it to your account." required="">
                        </div>
                        <div>
                          <button class="btn btn-primary px-5" type="submit" name="">
                            <h3 class="mb-0">SUBMIT</h3>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- 9 CINC - Commissions Inc -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                  <div class="col-11"> CINC - Commissions Inc <br>
                    <img class="img-fluid" src="{{url('assets/images/cinc1.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <img class="img-fluid" src="{{url('assets/images/Constan-Contact-login.png')}}" alt="">
                  <h4 class="mb-3">CRM CINC - How to find your API Key & API Url.</h4>
                  <h5>Your Cinc API key and your Cinc platform domain name are needed to connect.</h5>
                  <h5 class="fw-bold">Where to find the API Key:</h5>
                  <h5>Please sign into your platform under Dashboard > Profile & Settings (in the upper righthand
                    corner) > Integrations to see your Zapier API key.</h5>
                  <h5>Please make sure you grab the Zapier specific key.</h5>
                  <h5>
                    <a href="">http://www.domain_name/dashboard/profile#integrations.</a>
                  </h5>
                  <div class="d-flex my-3">
                    <div class="me-3">
                      <img class="img-fluid" src="{{url('assets/images/padlock.png')}}" alt="">
                    </div>
                    <div class="">
                      <h6 class="fw-bold">NOTE: Even though the Open House Wizard website is secured, any outside
                        account passwords provided here are not stored on our website, they are used once to connect
                        your Open House Wizard Account to your Constant Contact Account.</h6>
                      <h5>Please fill in your info using the form below then click SUBMIT.</h5>
                      <p>(This only needs to be done once, if you change the password you can return here to update it.)
                      </p>
                    </div>
                  </div>
                  <div class="col-12">
                    <form action="" class="border-dashed-black p-3 my-3">
                      <div class="row align-items-end justify-content-center mb-3">
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">Paste your the info noted above here (Api Key, Leads Email
                            Address, etc.)</label>
                          <input type="text" id="" name=""
                            placeholder="Paste your information here to add it to your account." required="">
                        </div>
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">If Asked to provide an API Url or Website Url in Addition to
                            an API Key - Please paste it here.</label>
                          <input type="text" id="" name=""
                            placeholder="Paste your information here to add it to your account." required="">
                        </div>
                      </div>
                      <div class="col-4 m-auto text-center">
                        <button class="btn btn-primary px-5" type="submit" name="">
                          <h3 class="mb-0">SUBMIT</h3>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- 10 Constant Contact -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">
                  <div class="col-11"> Constant Contact <br>
                    <img class="img-fluid" src="{{url('assets/images/CONSTANT-CONTACT.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <div class="row mb-3">
                    <div class="col-4 text-center">
                      <img class="img-fluid border-dashed" src="{{url('assets/images/Constan-Contact-login.png')}}" alt="">
                    </div>
                    <div class="col-8   ">
                      <h4 class="mb-3">Constant Contact requires a one time connection to your Open House Wizard Account
                        to allow Open House Sign-in Leads to be accepted...</h4>
                    </div>
                  </div>
                  <div class="d-flex my-3">
                    <div class="me-3">
                      <img class="img-fluid" src="{{url('assets/images/padlock.png')}}" alt="">
                    </div>
                    <div class="">
                      <h6 class="fw-bold">NOTE: Even though the Open House Wizard website is secured, any outside
                        account passwords provided here are not stored on our website, they are used once to connect
                        your Open House Wizard Account to your Constant Contact Account.</h6>
                      <h5>Please fill in your info using the form below then click SUBMIT.</h5>
                      <p>(This only needs to be done once, if you change the password you can return here to update it.)
                      </p>
                    </div>
                  </div>
                  <div class="col-12">
                    <form action="" class="border-dashed-black p-3 my-3">
                      <div class="row align-items-end justify-content-center mb-3">
                        <h3>Constant Contact Info</h3>
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">Login name or Email Address</label>
                          <input type="text" id="" name="" placeholder="Login name, ID or Email" required="">
                        </div>
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">Password</label>
                          <input type="text" id="" name=""
                            placeholder="Password, used once to connect but will not be stored here." required="">
                        </div>
                      </div>
                      <div class="col-4 m-auto text-center">
                        <button class="btn btn-primary px-5" type="submit" name="">
                          <h3 class="mb-0">SUBMIT</h3>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- 11 Contactually -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseEleven" aria-expanded="false" aria-controls="flush-collapseEleven">
                  <div class="col-11"> Contactually <br>
                    <img class="img-fluid" src="{{url('assets/images/CONTACTUALLY.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapseEleven" class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <div class="row mb-3">
                    <div class="col-4 text-center">
                      <img class="img-fluid border-dashed" src="{{url('assets/images/Contactually-login.png')}}" alt="">
                    </div>
                    <div class="col-8   ">
                      <h4 class="mb-3">Contactually requires a one time connection to your Open House Wizard Account to
                        allow Open House Sign-in Leads to be accepted...</h4>
                    </div>
                  </div>
                  <div class="d-flex my-3">
                    <div class="me-3">
                      <img class="img-fluid" src="{{url('assets/images/padlock.png')}}" alt="">
                    </div>
                    <div class="">
                      <h6 class="fw-bold">NOTE: Even though the Open House Wizard website is secured, any outside
                        account passwords provided here are not stored on our website, they are used once to connect
                        your Open House Wizard Account to your Contactually Account.</h6>
                      <h5>Please fill in your info using the form below then click SUBMIT.</h5>
                      <p>(This only needs to be done once, if you change the password you can return here to update it.)
                      </p>
                    </div>
                  </div>
                  <div class="col-12">
                    <form action="" class="border-dashed-black p-3 my-3">
                      <div class="row align-items-end justify-content-center mb-3">
                        <h3>Contactually Info</h3>
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">Login name or Email Address</label>
                          <input type="text" id="" name="" placeholder="Login name, ID or Email" required="">
                        </div>
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">Password</label>
                          <input type="text" id="" name=""
                            placeholder="Password, used once to connect but will not be stored here." required="">
                        </div>
                      </div>
                      <div class="col-4 m-auto text-center">
                        <button class="btn btn-primary px-5" type="submit" name="">
                          <h3 class="mb-0">SUBMIT</h3>
                        </button>
                      </div>
                    </form>
                    <h5>How to locate your Open House Sign-In Leads & View their Information in Contactually.</h5>
                    <h5>Checkout this article: <b><a
                          href="#"></a>https://openhousewiz.com/crm-contactually-contacts/</b></h5>
                  </div>
                </div>
              </div>
            </div>
            <!-- 12 Daylite -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseTwelve" aria-expanded="false" aria-controls="flush-collapseTwelve">
                  <div class="col-11"> Daylite Info <br>
                    <img class="img-fluid" src="{{url('assets/images/DAYLITE.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapseTwelve" class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <div class="row mb-3">
                    <div class="col-4 text-center">
                      <img class="img-fluid border-dashed" src="{{url('assets/images/Daylite-login.png')}}" alt="">
                    </div>
                    <div class="col-8   ">
                      <h4 class="mb-3">Daylite requires a one time connection to your Open House Wizard Account to allow
                        Open House Sign-in Leads to be accepted...</h4>
                    </div>
                  </div>
                  <div class="d-flex my-3">
                    <div class="me-3">
                      <img class="img-fluid" src="{{url('assets/images/padlock.png')}}" alt="">
                    </div>
                    <div class="">
                      <h6 class="fw-bold">NOTE: Even though the Open House Wizard website is secured, any outside
                        account passwords provided here are not stored on our website, they are used once to connect
                        your Open House Wizard Account to your Daylite Account.</h6>
                      <h5>Please fill in your info using the form below then click SUBMIT.</h5>
                      <p>(This only needs to be done once, if you change the password you can return here to update it.)
                      </p>
                    </div>
                  </div>
                  <div class="col-12">
                    <form action="" class="border-dashed-black p-3 my-3">
                      <div class="row align-items-end justify-content-center mb-3">
                        <h3>Daylite Info</h3>
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">Login name or Email Address</label>
                          <input type="text" id="" name="" placeholder="Login name, ID or Email" required="">
                        </div>
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">Password</label>
                          <input type="text" id="" name=""
                            placeholder="Password, used once to connect but will not be stored here." required="">
                        </div>
                      </div>
                      <div class="col-4 m-auto text-center">
                        <button class="btn btn-primary px-5" type="submit" name="">
                          <h3 class="mb-0">SUBMIT</h3>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- 13 Drip -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseThirteen" aria-expanded="false" aria-controls="flush-collapseThirteen">
                  <div class="col-11"> Drip Info <br>
                    <img class="img-fluid" src="{{url('assets/images/drip.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapseThirteen" class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <h4 class="mb-3">DRIP - How to find your API Key.</h4>
                  <h5>If you are using Drip, your Drip API Key is required for us to setup your integration to your Open
                    House Sign In Page. So, follow the steps below to find that API Key, then paste it into the box
                    below & click Submit.</h5>
                  <h4 class="fw-bold">Instructions:</h4>
                  <h5>To find your API token login to your Drip account and go to https://www.getdrip.com/user/edit.
                    Your API key will be near the bottom under 'API Token'.</h5>
                </div>
                <div class="col-12">
                  <form action="" class="border-dashed-black p-3 my-3">
                    <div class="d-flex align-items-end justify-content-start mb-3">
                      <div class="me-2">
                        <label class="text-left" for="">Paste your the info noted above here (Api Key, Leads Email
                          Address, etc.)</label>
                        <input type="text" id="" name=""
                          placeholder="Paste your information here to add it to your account." required="">
                      </div>
                      <div>
                        <button class="btn btn-primary px-5" type="submit" name="">
                          <h3 class="mb-0">SUBMIT</h3>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- 14 Emma -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapsefourteen" aria-expanded="false" aria-controls="flush-collapsefourteen">
                  <div class="col-11"> EMMA <br>
                    <img src="{{url('assets/images/EMMA.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapsefourteen" class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <h4 class="mb-3">Email Marketing - Emma - How to find your API Key.</h4>
                  <div>
                    <h5>If you are using Emma Email Marketing, your Emma 'Public API Key', 'Private API Key' and
                      'Account
                      ID' are required for us to setup your integration to your Open House Sign In Page. So, follow the
                      steps below to find that API Key, then paste it into the box below & click Submit.</h5>
                    <h4 class="fw-bold">Instructions:</h4>
                    <h5>To find those in Emma, simply go to your Account/Billing Settings, then you can copy those from
                      there.</h5>
                  </div>
                  <div class="col-12">
                    <form action="" class="border-dashed-black p-3 my-3">
                      <div class="d-flex align-items-end justify-content-center mb-3">
                        <div class="me-2">
                          <label class="text-left" for="">Paste your the info noted above here (Api Key, Leads Email
                            Address, etc.)</label>
                          <input type="text" id="" name=""
                            placeholder="Paste your information here to add it to your account." required="">
                        </div>
                        <div>
                          <button class="btn btn-primary px-5" type="submit" name="">
                            <h3 class="mb-0">SUBMIT</h3>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- 15 Followup Boss -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapsefourteen" aria-expanded="false" aria-controls="flush-collapsefourteen">
                  <div class="col-11"> Followup Boss <br>
                    <img src="{{url('assets/images/FOLLOW-UP-BOSS.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapsefourteen" class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <h4 class="mb-3">CRM Followup Boss - How to find your API Key.</h4>
                  <div>
                    <h5>If you are using Followup Boss CRM your Followup Boss API Key is required for us to setup your
                      integration to your Open House Sign In Page. So, follow the steps below to find that API Key, then
                      paste it into the box below & click Submit.</h5>
                  </div>
                  <div class="col-12">
                    <form action="" class="border-dashed-black p-3 my-3">
                      <div class="d-flex align-items-end justify-content-center mb-3">
                        <div class="me-2">
                          <label class="text-left" for="">Paste your the info noted above here (Api Key, Leads Email
                            Address, etc.)</label>
                          <input type="text" id="" name=""
                            placeholder="Paste your information here to add it to your account." required="">
                        </div>
                        <div>
                          <button class="btn btn-primary px-5" type="submit" name="">
                            <h3 class="mb-0">SUBMIT</h3>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="mb-4">
                    <h4 class="fw-bold">Instructions:</h4>
                    <h5 class="fw-bold mb-3">1. Login to Followup Boss</h5>
                    <img class="img-fluid w-100" src="{{url('assets/images/Step1-6.png')}}" alt="">
                  </div>
                  <div class="mb-4">
                    <h5 class="fw-bold mb-3">2. Click on 'Admin' option at the top of the screen (next to the search
                      people item)</h5>
                    <img class="img-fluid w-100" src="{{('url/images/Step2-4.png')}}" alt="">
                  </div>
                  <div class="mb-4">
                    <h5 class="fw-bold mb-3">3. Click on the 'More' item on the right side top of the screen and then
                      click the 'API' link at the bottom of the pulldown menu</h5>
                    <img class="img-fluid w-100" src="{{url('assets/images/Step3-2.png')}}" alt="">
                  </div>
                  <div class="mb-4">
                    <h5 class="fw-bold mb-3">4. There you will see the API Key (letters, numbers and dashes), click the
                      'Copy' link to the right of the API Key and copy it.</h5>
                  </div>
                </div>
              </div>
            </div>
            <!-- 16 FreeAgent CRM -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapsefifteen" aria-expanded="false" aria-controls="flush-collapsefifteen">
                  <div class="col-11"> FreeAgent CRM <br>
                    <img src="{{url('assets/images/Freeagentcrm-z.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapsefifteen" class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <div class="row mb-3">
                    <div class="col-4 text-center">
                      <img class="img-fluid border-dashed" src="{{url('assets/images/Freeagentcrm.jpg')}}" alt="">
                    </div>
                    <div class="col-8   ">
                      <h4 class="mb-3">FreeAgent CRM requires a one time connection to your Open House Wizard Account to
                        allow Open House Sign-in Leads to be accepted...</h4>
                    </div>
                  </div>
                  <div class="d-flex my-3">
                    <div class="me-3">
                      <img class="img-fluid" src="{{url('assets/images/padlock.png')}}" alt="">
                    </div>
                    <div class="">
                      <h6 class="fw-bold">NOTE: Even though the Open House Wizard website is secured, any outside
                        account
                        passwords provided here are not stored on our website, they are used once to connect your Open
                        House Wizard Account to your FreeAgent CRM Account.</h6>
                      <h5>Please fill in your info using the form below then click SUBMIT.</h5>
                      <p> (This only needs to be done once, if you change the password you can return here to update
                        it.)
                      </p>
                    </div>
                  </div>
                  <div class="col-12">
                    <form action="" class="border-dashed-black p-3">
                      <div class="row justify-content-center mb-3">
                        <h3>Agent Legend Info</h3>
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">Login name or Email Address</label>
                          <input type="text" id="" name="" placeholder="Login name, ID or Email" required="">
                        </div>
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">Password</label>
                          <input type="text" id="" name=""
                            placeholder="Password, used once to connect but will not be stored here." required="">
                        </div>
                      </div>
                      <div class="col-4 m-auto text-center">
                        <button class="btn btn-primary px-5" type="submit" name="">
                          <h3 class="mb-0">SUBMIT</h3>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!--17  Get Response -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapsesixteenn" aria-expanded="false" aria-controls="flush-collapsesixteenn">
                  <div class="col-11"> Get Response <br>
                    <img src="{{url('assets/images/getresponse.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapsesixteenn" class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <h4 class="mb-3">Get Response - How to find your API Key.</h4>
                  <h5>If you are using Getresponse, your API Key is required for us to setup your integration to your
                    Open
                    House Sign In Page. So, follow the steps below to find that API Key, then paste it into the box
                    below
                    & click Submit.</h5>
                  <h4 class="fw-bold">Instructions:</h4>
                  <h5>You can find it under Profile >> Integrations & API >> API. This key should be kept as secret as
                    your password - don’t share it with anybody.</h5>
                  <div class="col-12">
                    <form action="" class="border-dashed-black p-3 my-3">
                      <div class="d-flex align-items-end justify-content-center mb-3">
                        <div class="me-2">
                          <label class="text-left" for="">Paste your the info noted above here (Api Key, Leads Email
                            Address, etc.)</label>
                          <input type="text" id="" name=""
                            placeholder="Paste your information here to add it to your account." required="">
                        </div>
                        <div>
                          <button class="btn btn-primary px-5" type="submit" name="">
                            <h3 class="mb-0">SUBMIT</h3>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- 18 Google Contacts -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseseventeen" aria-expanded="false"
                  aria-controls="flush-collapseseventeen">
                  <div class="col-11"> Google Contacts <br>
                    <img src="{{url('assets/images/google-contacts.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapseseventeen" class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <div class="row mb-3">
                    <div class="col-4 text-center">
                      <img class="img-fluid border-dashed" src="{{url('assets/images/gcontacts.jpg')}}" alt="">
                    </div>
                    <div class="col-8   ">
                      <h4 class="mb-3">FreeAgent CRM requires a one time connection to your Open House Wizard Account to
                        allow Open House Sign-in Leads to be accepted...</h4>
                    </div>
                  </div>
                  <div class="d-flex my-3">
                    <div class="me-3">
                      <img class="img-fluid" src="{{url('assets/images/padlock.png')}}" alt="">
                    </div>
                    <div class="">
                      <h6 class="fw-bold">NOTE: Even though the Open House Wizard website is secured, any outside
                        account
                        passwords provided here are not stored on our website, they are used once to connect your Open
                        House Wizard Account to your CRM Account.</h6>
                      <h5> Please fill in your info using the form below then click SUBMIT. </h5>
                      <p> (This only needs to be done once, if you change the password you can return here to update
                        it.)
                      </p>
                    </div>
                  </div>
                  <div class="">
                    <h4>To add Google Contacts</h4>
                    <ul>
                      <li>If you do not already have one, setup a Free Gmail Account at Google.com</li>
                      <li>Login to Gmail and Open Contacts (Round Circle with dots on upper right part of screen then
                        click Contacts)</li>
                      <li>Add a Label, Click the 'Create Label', Name it Open House Visitors (or whatever you like)</li>
                      <li>Add Your Login Info Below to Connect it to Open House Wizard</li>
                      <li>Google will send you a Verification Code, so watch for it and send it to us here right away to
                        finish the connection setup</li>
                    </ul>
                  </div>
                  <hr>
                  <div class="col-12">
                    <form action="" class="border-dashed-black p-3 my-3">
                      <div class="row align-items-end justify-content-center mb-3">
                        <h3>Google Login</h3>
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">Login name or Email Address</label>
                          <input type="text" id="" name="" placeholder="Login name, ID or Email" required="">
                        </div>
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">Password</label>
                          <input type="text" id="" name=""
                            placeholder="Password, used once to connect but will not be stored here." required="">
                        </div>
                      </div>
                      <div class="col-4 m-auto text-center">
                        <button class="btn btn-primary px-5" type="submit" name="">
                          <h3 class="mb-0">SUBMIT</h3>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- 19 Google Sheets -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseeighteen" aria-expanded="false" aria-controls="flush-collapseeighteen">
                  <div class="col-11"> Google Sheets <br>
                    <img src="{{url('assets/images/google-sheets.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapseeighteen" class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <div class="row mb-3">
                    <div class="col-4 text-center">
                      <img class="img-fluid border-dashed" src="{{url('assets/images/connect-to-google-sheets.jpg')}}" alt="">
                    </div>
                    <div class="col-8   ">
                      <h4 class="mb-3">For Google Sheets we will 'Share' a Sheet with you that will be connected to your
                        Open House Wizard Account ...</h4>
                    </div>
                  </div>
                  <hr>
                  <div class="d-flex my-3">
                    <div class="">
                      <h6 class="fw-bold">Please add your Gmail email address using the form below then click SUBMIT.
                      </h6>
                      <h5> Please fill in your info using the form below then click SUBMIT. </h5>
                      <p>(This only needs to be done once, if you change to a different Gmail address you can return
                        here
                        to update it.)</p>
                    </div>
                  </div>
                  <div class="col-12">
                    <form action="" class="border-dashed-black p-3 my-3">
                      <h3>Gmail Address</h3>
                      <div class="d-flex align-items-end justify-content-start mb-3">
                        <div class="me-2">
                          <label class="text-left" for="">Paste your the info noted above here (Api Key, Leads Email
                            Address, etc.)</label>
                          <input type="text" id="" name=""
                            placeholder="Paste your information here to add it to your account." required="">
                        </div>
                        <div>
                          <button class="btn btn-primary px-5" type="submit" name="">
                            <h3 class="mb-0">SUBMIT</h3>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="">
                    <h5 class="fw-bold">Notes about Google Sheets & Open House Wizard</h5>
                    <h6>You will receive an email in your Gmail account once the Sheet has been shared with you. Simply
                      click the link to open the Sheet in Google Sheets. After that you can access the Sheet directly
                      from
                      Google Sheets.</h6>
                  </div>
                  <hr>
                </div>
              </div>
            </div>
            <!--20 Hubspot -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapsenineteen" aria-expanded="false" aria-controls="flush-collapseeighteen">
                  <div class="col-11"> Hubspot <br>
                    <img src="{{url('assets/images/HUBSPOT.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapsenineteen" class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <h4 class="mb-3">Hubspot requires a one time connection to your Open House Wizard Account to allow
                    Open
                    House Sign-in Leads to be accepted...</h4>
                  <div class="d-flex my-3">
                    <div class="me-3">
                      <img class="img-fluid" src="{{url('assets/images/padlock.png')}}" alt="">
                    </div>
                    <div class="">
                      <h6 class="fw-bold">NOTE: Even though the Open House Wizard website is secured, any outside
                        account
                        passwords provided here are not stored on our website, they are used once to connect your Open
                        House Wizard Account to your Hubspot Account.</h6>
                      <h5>Please fill in your info using the form below then click SUBMIT.</h5>
                      <p>(This only needs to be done once, if you change the password you can return here to update it.)
                      </p>
                    </div>
                  </div>
                  <div class="col-12">
                    <form action="" class="border-dashed-black p-3 my-3">
                      <div class="row align-items-end justify-content-center mb-3">
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">Login name or Email Address</label>
                          <input type="text" id="" name="" placeholder="Login name, ID or Email" required="">
                        </div>
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">Password</label>
                          <input type="text" id="" name=""
                            placeholder="Password, used once to connect but will not be stored here." required="">
                        </div>
                      </div>
                      <div class="col-4 m-auto text-center">
                        <button class="btn btn-primary px-5" type="submit" name="">
                          <h3 class="mb-0">SUBMIT</h3>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- 21 Infusionsoft -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseTwenty" aria-expanded="false" aria-controls="flush-collapseTwenty">
                  <div class="col-11"> Infusionsoft <br>
                    <img src="{{url('assets/images/INFUSIONSOFT.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapseTwenty" class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <div class="row mb-3">
                    <div class="col-4 text-center">
                      <img class="img-fluid border-dashed" src="{{url('assets/images/Infusionsoft-login.png')}}" alt="">
                    </div>
                    <div class="col-8   ">
                      <h4 class="mb-3">Infusionsoft requires a one time connection to your Open House Wizard Account to
                        allow Open House Sign-in Leads to be accepted...</h4>
                    </div>
                  </div>
                  <hr>
                  <div class="d-flex my-3">
                    <div class="me-3">
                      <img class="img-fluid" src="{{url('assets/images/padlock.png')}}" alt="">
                    </div>
                    <div class="">
                      <h6 class="fw-bold">NOTE: Even though the Open House Wizard website is secured, any outside
                        account
                        passwords provided here are not stored on our website, they are used once to connect your Open
                        House Wizard Account to your Infusionsoft Account.</h6>
                      <h5>Please fill in your info using the form below then click SUBMIT.</h5>
                      <p>(This only needs to be done once, if you change the password you can return here to update it.)
                      </p>
                    </div>
                  </div>
                  <hr>
                  <div class="col-12">
                    <form action="" class="border-dashed-black p-3 my-3">
                      <div class="row align-items-end justify-content-center mb-3">
                        <h3>Infusionsoft Info</h3>
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">Login name or Email Address</label>
                          <input type="text" id="" name="" placeholder="Login name, ID or Email" required="">
                        </div>
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">Password</label>
                          <input type="text" id="" name=""
                            placeholder="Password, used once to connect but will not be stored here." required="">
                        </div>
                      </div>
                      <div class="col-4 m-auto text-center">
                        <button class="btn btn-primary px-5" type="submit" name="">
                          <h3 class="mb-0">SUBMIT</h3>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- 22 Insightly -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseTwentyone" aria-expanded="false"
                  aria-controls="flush-collapseTwentyone">
                  <div class="col-11"> Insightly <br>
                    <img src="{{url('assets/images/INSIGHTLY.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapseTwentyone" class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <h4 class="mb-3">CRM Insightly - How to find your API Key.</h4>
                  <h5>If you are using Insightly CRM your Insightly API Key is required for us to setup your integration
                    to your Open House Sign In Page. So, follow the steps below to find that API Key, then paste it into
                    the box below & click Submit.</h5>
                  <hr>
                  <div class="col-12">
                    <form action="" class="border-dashed-black p-3 my-3">
                      <div class="d-flex align-items-end justify-content-start mb-3">
                        <div class="me-2">
                          <label class="text-left" for="">Paste your the info noted above here (Api Key, Leads Email
                            Address, etc.)</label>
                          <input type="text" id="" name=""
                            placeholder="Paste your information here to add it to your account." required="">
                        </div>
                        <div>
                          <button class="btn btn-primary px-5" type="submit" name="">
                            <h3 class="mb-0">SUBMIT</h3>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <hr>
                  <div class="mb-4">
                    <h4 class="fw-bold">Instructions:</h4>
                    <h5 class="fw-bold mb-3">1. Login to Insightly</h5>
                    <img class="img-fluid w-100" src="{{url('assets/images/Step1-3.png')}}" alt="">
                  </div>
                  <div class="mb-4">
                    <h5 class="fw-bold mb-3">2. Click on the down arrow to view the menu on the upper right screen (next
                      to the square with the person) & choose the 'User Settings' item</h5>
                    <img class="img-fluid w-100" src="{{url('assets/images/sstep2-1.png')}}" alt="">
                  </div>
                  <div class="mb-4">
                    <h5 class="fw-bold mb-3">3. Scroll down towards the bottom of the User Settings and you will see the
                      API Key (letters, numbers and dashes), highlight the key and copy it.</h5>
                  </div>
                </div>
              </div>
            </div>
            <!-- 23 Ixact Contact Solutions -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseTwentytwo" aria-expanded="false"
                  aria-controls="flush-collapseTwentytwo">
                  <div class="col-11"> Ixact Contact Solutions <br>
                    <img src="{{url('assets/images/IXACTCONTACT.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapseTwentytwo" class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <h4 class="mb-3">CRM Ixact Contact Solutions - How to find your Lead Capture Email Address.</h4>
                  <h5>If you are using Ixact Contact Solutions CRM your 'Lead Capture Email Address' is required for us
                    to
                    setup your integration to your Open House Sign In Page. So, follow the steps below to find that
                    Email
                    Address, then paste it into the box below & click Submit.</h5>
                  <hr>
                  <div class="col-12">
                    <form action="" class="border-dashed-black p-3 my-3">
                      <div class="d-flex align-items-end justify-content-start mb-3">
                        <div class="me-2">
                          <label class="text-left" for="">Paste your the info noted above here (Api Key, Leads Email
                            Address, etc.)</label>
                          <input type="text" id="" name=""
                            placeholder="Paste your information here to add it to your account." required="">
                        </div>
                        <div>
                          <button class="btn btn-primary px-5" type="submit" name="">
                            <h3 class="mb-0">SUBMIT</h3>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <hr>
                  <div class="">
                    <h4 class="fw-bold">Instructions:</h4>
                    <h5 class="fw-bold mb-3">1. Login to Ixact Contact</h5>
                  </div>
                  <div class="">
                    <h5 class="fw-bold mb-3">2. Then to locate that address you would go to User Profile > Lead Capture
                      >
                      Enable Lead Capture Via Email</h5>
                  </div>
                  <div class="">
                    <h5 class="fw-bold mb-3">3. Copy the email address shown</h5>
                  </div>
                </div>
              </div>
            </div>
            <!-- 24 Karma CRM -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseTwentythree" aria-expanded="false"
                  aria-controls="flush-collapseTwentythree">
                  <div class="col-11"> Karma CRM <br>
                    <img src="{{url('assets/images/KARMACRM.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapseTwentythree" class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <h4 class="mb-3">Karma CRM - How to find your API Key.</h4>
                  <h5>If you are using KarmaCRM your KarmaCRM API Key is required for us to setup your integration to
                    your
                    Open House Sign In Page. So, follow the steps below to find that API Key, then paste it into the box
                    below & click Submit.</h5>
                  <hr>
                  <div class="col-12">
                    <form action="" class="border-dashed-black p-3 my-3">
                      <div class="d-flex align-items-end justify-content-start mb-3">
                        <div class="me-2">
                          <label class="text-left" for="">Paste your the info noted above here (Api Key, Leads Email
                            Address, etc.)</label>
                          <input type="text" id="" name=""
                            placeholder="Paste your information here to add it to your account." required="">
                        </div>
                        <div>
                          <button class="btn btn-primary px-5" type="submit" name="">
                            <h3 class="mb-0">SUBMIT</h3>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <hr>
                  <div class="mb-4">
                    <h4 class="fw-bold">Instructions:</h4>
                    <h5 class="fw-bold mb-3">1. Login to Karma CRM</h5>
                    <img class="img-fluid  w-100" src="{{url('assets/images/step1.png')}}" alt="">
                  </div>
                  <div class="mb-4">
                    <h5 class="fw-bold mb-3">2. Click on the down arrow on the top right of the screen and choose
                      'Settings'</h5>
                    <img class="img-fluid  w-100" src="{{url('assets/images/step2-1.png')}}" alt="">
                  </div>
                  <div class="mb-4">
                    <h5 class="fw-bold mb-3">3. Scroll to the bottom of the page & you will see the API Key, copy the
                      key
                      (letters and numbers).</h5>
                  </div>
                </div>
              </div>
            </div>
            <!-- 25 Kunversion -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseTwentyFourr" aria-expanded="false"
                  aria-controls="flush-collapseTwentyFourr">
                  <div class="col-11"> Kunversion <br>
                    <img src="{{url('assets/images/KUNVERSION.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapseTwentyFourr" class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <h4 class="mb-3">CRM Kunversion - How to find your API Key.</h4>
                  <h5>If you are using Kunversion CRM your Kunversion 'Zapier Key' is required for us to setup your
                    integration to your Open House Sign In Page. So, follow the steps below to find that API Key, then
                    paste it into the box below & click Submit.</h5>
                  <hr>
                  <div class="col-12">
                    <form action="" class="border-dashed-black p-3 my-3">
                      <div class="d-flex align-items-end justify-content-start mb-3">
                        <div class="me-2">
                          <label class="text-left" for="">Paste your the info noted above here (Api Key, Leads Email
                            Address, etc.)</label>
                          <input type="text" id="" name=""
                            placeholder="Paste your information here to add it to your account." required="">
                        </div>
                        <div>
                          <button class="btn btn-primary px-5" type="submit" name="">
                            <h3 class="mb-0">SUBMIT</h3>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <hr>
                  <div class="">
                    <h4 class="fw-bold">Instructions:</h4>
                    <h5 class="fw-bold mb-3">1. Login to Kunversion</h5>
                  </div>
                  <div class="">
                    <h5 class="fw-bold mb-3">2. You can find the 'Zapier Key' on your 'Settings' page. Note: You need to
                      copy the Zapier key, not the Zapier link.</h5>
                  </div>
                  <div class="">
                    <h5 class="fw-bold mb-3">3. Once you see the Zapier API Key, (letters, numbers and dashes),
                      highlight
                      and copy it, (or click the copy link to the right of it)</h5>
                  </div>
                </div>
              </div>
            </div>
            <!-- 26 kvCORE -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseTwentyFive" aria-expanded="false"
                  aria-controls="flush-collapseTwentyFive">
                  <div class="col-11"> kvCORE <br>
                    <img src="{{url('assets/images/kvCORE.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapseTwentyFive" class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <h4 class="mb-3"> CRM kvCORE - How to find your API Key.</h4>
                  <h5>If you are using the kvCORE CRM your kvCORE 'Zapier Key' is required for us to setup your
                    integration to your Open House Sign In Page. So, follow the steps below to find that API Key, then
                    paste it into the box below & click Submit.</h5>
                  <hr>
                  <div class="col-12">
                    <form action="" class="border-dashed-black p-3 my-3">
                      <div class="d-flex align-items-end justify-content-start mb-3">
                        <div class="me-2">
                          <label class="text-left" for="">Paste your the info noted above here (Api Key, Leads Email
                            Address, etc.)</label>
                          <input type="text" id="" name=""
                            placeholder="Paste your information here to add it to your account." required="">
                        </div>
                        <div>
                          <button class="btn btn-primary px-5" type="submit" name="">
                            <h3 class="mb-0">SUBMIT</h3>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <hr>
                  <div class="">
                    <h4 class="fw-bold">Instructions:</h4>
                    <h5 class="fw-bold mb-3">1. Login to kvCORE</h5>
                  </div>
                  <div class="">
                    <h5 class="fw-bold mb-3">2. You can find the 'Zapier Key' on your 'Settings' page. Note: You need to
                      copy the Zapier key, not the Zapier link.</h5>
                  </div>
                  <div class="">
                    <h5 class="fw-bold mb-3">3. Once you see the Zapier API Key, (letters, numbers and dashes),
                      highlight
                      and copy it, (or click the copy link to the right of it)</h5>
                  </div>
                </div>
              </div>
            </div>
            <!-- 27 KWCommand -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseTwentysix" aria-expanded="false"
                  aria-controls="flush-collapseTwentysix">
                  <div class="col-11"> KWCommand <br>
                    <img src="{{url('assets/images/kwcommand.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapseTwentysix" class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <div class="row mb-3">
                    <div class="col-4 text-center">
                      <img class="img-fluid border-dashed" src="{{url('assets/images/connect-kwcommand.jpg')}}" alt="">
                    </div>
                    <div class="col-8   ">
                      <h4 class="mb-3">KW Command requires a one time connection to your Open House Wizard Account to
                        allow Open House Sign-in Leads to be accepted...</h4>
                    </div>
                  </div>
                  <hr>
                  <div class="">
                    <h4 class="fw-bold">Instructions:</h4>
                    <h5 class="fw-bold mb-3">1. If you do not already have a KW 'Team' setup then you’ll need to setup a
                      ‘KW Team’ & what KW calls ‘lead routing’ there 1st before we can connect.</h5>
                    <h5>Here are the 2 articles that explain all this on the KW site:</h5>
                    <h5><a
                        href="">https://answers.kw.com/hc/en-us/articles/360019767074-Get-Started-with-Lead-Routing-Teams-</a>
                    </h5>
                    <h5 class="mb-3"><a
                        href="">https://answers.kw.com/hc/en-us/articles/360020271393-Create-a-New-Lead-Route-Teams-</a>
                    </h5>
                    <h5 class="fw-bold mb-3"> 2. Add your KW connection information below</h5>
                  </div>
                  <hr>
                  <div class="d-flex my-3">
                    <div class="me-3">
                      <img class="img-fluid" src="{{url('assets/images/padlock.png')}}" alt="">
                    </div>
                    <div class="">
                      <h6 class="fw-bold">NOTE: Even though the Open House Wizard website is secured, any outside
                        account
                        passwords provided here are not stored on our website, they are used once to connect your Open
                        House Wizard Account to your KWCommand Account.</h6>
                      <h5>Please fill in your info using the form below then click SUBMIT.</h5>
                      <p>(This only needs to be done once, if you change the password you can return here to update it.)
                      </p>
                    </div>
                  </div>
                  <hr>
                  <div class="col-12">
                    <form action="" class="border-dashed-black p-3 my-3">
                      <div class="row align-items-end justify-content-center mb-3">
                        <h3>KWCommand Info</h3>
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">Login name or Email Address</label>
                          <input type="text" id="" name="" placeholder="Login name, ID or Email" required="">
                        </div>
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">Password</label>
                          <input type="text" id="" name=""
                            placeholder="Password, used once to connect but will not be stored here." required="">
                        </div>
                      </div>
                      <div class="col-4 m-auto text-center">
                        <button class="btn btn-primary px-5" type="submit" name="">
                          <h3 class="mb-0">SUBMIT</h3>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- 28 LeadMailbox -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseTwentysix" aria-expanded="false"
                  aria-controls="flush-collapseTwentysix">
                  <div class="col-11"> LeadMailbox <br>
                    <img src="{{url('assets/images/leadmailbox.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapseTwentysix" class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <div>
                    <h4 class="mb-3"> LeadMailbox - How to find your Delivery Url.</h4>
                    <h5>If you are using Lead Simple we need your 'Delivery Url'. The actual URL can be obtained from
                      the
                      Campaign page within the</h5>
                    <h5>LeadMailbox Settings area.</h5>
                    <h5>The format of the url is similar to:</h5>
                    <h6>https://v2.leadmailbox.com/api/leads/add/ACCOUNT/</h6>
                    <h6>Leads are added to the database in real-time, as soon as the Visitor signs in. Paste your url
                      into
                      the box below & click Submit.</h6>
                  </div>
                  <hr>
                  <div class="col-12">
                    <form action="" class="border-dashed-black p-3 my-3">
                      <div class="d-flex align-items-end justify-content-start mb-3">
                        <div class="me-2">
                          <label class="text-left" for="">Paste your the info noted above here (Api Key, Leads Email
                            Address, etc.)</label>
                          <input type="text" id="" name=""
                            placeholder="Paste your information here to add it to your account." required="">
                        </div>
                        <div>
                          <button class="btn btn-primary px-5" type="submit" name="">
                            <h3 class="mb-0">SUBMIT</h3>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- 29 Lead Simple -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseTwentysix" aria-expanded="false"
                  aria-controls="flush-collapseTwentysix">
                  <div class="col-11"> Lead Simple <br>
                    <img src="{{url('assets/images/lead-simple.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapseTwentysix" class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <div>
                    <h4 class="mb-3"> Lead Simple - How to find your API Key.</h4>
                    <h5>If you are using Lead Simple your API Key is required for us to setup your integration to your
                      Open House Sign In Page. So, follow the steps below to find that API Key, then paste it into the
                      box
                      below & click Submit.</h5>
                  </div>
                  <div class="mb-4">
                    <h4 class="fw-bold">Instructions:</h4>
                    <h5 class="fw-bold mb-3">You can find your API Key on your company settings page.</h5>
                    <h5><a href="">https://app.leadsimple.com/settings</a></h5>
                  </div>
                  <hr>
                  <div class="col-12">
                    <form action="" class="border-dashed-black p-3 my-3">
                      <div class="d-flex align-items-end justify-content-start mb-3">
                        <div class="me-2">
                          <label class="text-left" for="">Paste your the info noted above here (Api Key, Leads Email
                            Address, etc.)</label>
                          <input type="text" id="" name=""
                            placeholder="Paste your information here to add it to your account." required="">
                        </div>
                        <div>
                          <button class="btn btn-primary px-5" type="submit" name="">
                            <h3 class="mb-0">SUBMIT</h3>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- 30 Liondesk -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseTwentyseven" aria-expanded="false"
                  aria-controls="flush-collapseTwentyseven">
                  <div class="col-11"> Liondesk <br>
                    <img src="{{url('assets/images/LIONDESK.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapseTwentyseven" class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <h4 class="mb-3">Authenticate your Open House Wizard Account one time to Liondesk</h4>
                  <div class="d-flex my-3">
                    <div class="me-3">
                      <img class="img-fluid" src="{{url('assets/images/padlock.png')}}" alt="">
                    </div>
                    <div class="">
                      <h6 class="fw-bold">NOTE: Even though the Open House Wizard website is secured, any outside
                        account
                        passwords provided here are not stored on our website, they are used once to connect your Open
                        House Wizard Account to your Liondesk Account.</h6>
                      <h5>Please fill in your info using the form below then click SUBMIT.</h5>
                      <p>(This only needs to be done once, if you change the password you can return here to update it.)
                      </p>
                    </div>
                  </div>
                  <hr>
                  <div class="col-12">
                    <form action="" class="border-dashed-black p-3 my-3">
                      <div class="row align-items-end justify-content-center mb-3">
                        <h3>Liondesk Info</h3>
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">Login name or Email Address</label>
                          <input type="text" id="" name="" placeholder="Login name, ID or Email" required="">
                        </div>
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">Password</label>
                          <input type="text" id="" name=""
                            placeholder="Password, used once to connect but will not be stored here." required="">
                        </div>
                      </div>
                      <div class="col-4 m-auto text-center">
                        <button class="btn btn-primary px-5" type="submit" name="">
                          <h3 class="mb-0">SUBMIT</h3>
                        </button>
                      </div>
                    </form>
                  </div>
                  <hr>
                  <div class="mb-4">
                    <h5 class="fw-bold"> HOW TO SETUP A DRIP CAMPAIGN FOR OPEN HOUSE LEADS </h5>
                    <h5 class="fw-bold mb-3">Check out this link: <a
                        href="https://openhousewiz.com/2017/01/liondesk-setup-open-house-drip-campaign/">https://openhousewiz.com/2017/01/liondesk-setup-open-house-drip-campaign/</a>
                    </h5>
                  </div>
                </div>
              </div>
            </div>
            <!-- 31 Mail Chimp -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseTwentyeight" aria-expanded="false"
                  aria-controls="flush-collapseTwentyeight">
                  <div class="col-11"> Mail Chimp <br>
                    <img src="{{url('assets/images/MAILCHIMP.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapseTwentyeight" class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <div class="row mb-3">
                    <div class="col-4 text-center">
                      <img class="img-fluid border-dashed" src="{{url('assets/images/Mailchimp-login.png')}}" alt="">
                    </div>
                    <div class="col-8   ">
                      <h4 class="mb-3">Mail Chimp requires a one time connection to your Open House Wizard Account to
                        allow Open House Sign-in Leads to be accepted...</h4>
                    </div>
                  </div>
                  <hr>
                  <div class="d-flex my-3">
                    <div class="me-3">
                      <img class="img-fluid" src="{{url('assets/images/padlock.png')}}" alt="">
                    </div>
                    <div class="">
                      <h6 class="fw-bold">NOTE: Even though the Open House Wizard website is secured, any outside
                        account
                        passwords provided here are not stored on our website, they are used once to connect your Open
                        House Wizard Account to your Mail Chimp Account.</h6>
                      <h5>Please fill in your info using the form below then click SUBMIT.</h5>
                      <p>(This only needs to be done once, if you change the password you can return here to update it.)
                      </p>
                    </div>
                  </div>
                  <hr>
                  <div class="col-12">
                    <form action="" class="border-dashed-black p-3 my-3">
                      <div class="row align-items-end justify-content-center mb-3">
                        <h3>Mail Chimp Info</h3>
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">Login name or Email Address</label>
                          <input type="text" id="" name="" placeholder="Login name, ID or Email" required="">
                        </div>
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">Password</label>
                          <input type="text" id="" name=""
                            placeholder="Password, used once to connect but will not be stored here." required="">
                        </div>
                      </div>
                      <div class="col-4 m-auto text-center">
                        <button class="btn btn-primary px-5" type="submit" name="">
                          <h3 class="mb-0">SUBMIT</h3>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- 32 One Page CRM -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseTwentyeightt" aria-expanded="false"
                  aria-controls="flush-collapseTwentyeightt">
                  <div class="col-11"> One Page CRM <br>
                    <img src="{{url('assets/images/ONEPAGECRM.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapseTwentyeightt" class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <div class="row mb-3">
                    <div class="col-4 text-center">
                      <img class="img-fluid border-dashed" src="{{url('assets/images/One-Page-CRM-Login.png')}}" alt="">
                    </div>
                    <div class="col-8   ">
                      <h4 class="mb-3">One Page CRM requires a one time connection to your Open House Wizard Account to
                        allow Open House Sign-in Leads to be accepted...</h4>
                    </div>
                  </div>
                  <hr>
                  <div class="d-flex my-3">
                    <div class="me-3">
                      <img class="img-fluid" src="{{url('assets/images/padlock.png')}}" alt="">
                    </div>
                    <div class="">
                      <h6 class="fw-bold">NOTE: Even though the Open House Wizard website is secured, any outside
                        account
                        passwords provided here are not stored on our website, they are used once to connect your Open
                        House Wizard Account to your One Page CRM Account.</h6>
                      <h5>Please fill in your info using the form below then click SUBMIT.</h5>
                      <p>(This only needs to be done once, if you change the password you can return here to update it.)
                      </p>
                    </div>
                  </div>
                  <hr>
                  <div class="col-12">
                    <form action="" class="border-dashed-black p-3 my-3">
                      <div class="row align-items-end justify-content-center mb-3">
                        <h3>One Page CRM Info</h3>
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">Login name or Email Address</label>
                          <input type="text" id="" name="" placeholder="Login name, ID or Email" required="">
                        </div>
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">Password</label>
                          <input type="text" id="" name=""
                            placeholder="Password, used once to connect but will not be stored here." required="">
                        </div>
                      </div>
                      <div class="col-4 m-auto text-center">
                        <button class="btn btn-primary px-5" type="submit" name="">
                          <h3 class="mb-0">SUBMIT</h3>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- 33 Perfect Storm -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseTwentynine" aria-expanded="false"
                  aria-controls="flush-collapseTwentyFive">
                  <div class="col-11"> Perfect Storm <br>
                    <img src="{{url('assets/images/Perfect-Storm.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapseTwentynine" class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <h4 class="mb-3"> CRM Perfect Storm - How to find your API Key.</h4>
                  <h5>If you are using Perfect Storm CRM your API Key is required for us to setup your integration to
                    your
                    Open House Sign-In Page. So, follow the steps below to find that API Key, then paste it into the box
                    below & click Submit.</h5>
                  <hr>
                  <div class="col-12">
                    <form action="" class="border-dashed-black p-3 my-3">
                      <div class="d-flex align-items-end justify-content-start mb-3">
                        <div class="me-2">
                          <label class="text-left" for="">Paste your the info noted above here (Api Key, Leads Email
                            Address, etc.)</label>
                          <input type="text" id="" name=""
                            placeholder="Paste your information here to add it to your account." required="">
                        </div>
                        <div>
                          <button class="btn btn-primary px-5" type="submit" name="">
                            <h3 class="mb-0">SUBMIT</h3>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <hr>
                  <div class="">
                    <h4 class="fw-bold">Instructions:</h4>
                    <h5 class="fw-bold mb-3">1. Login to Perfect Storm</h5>

                    <h5 class="fw-bold mb-3">2. Got to the Settings page and the key can be found on your Zapier
                      integration settings page.</h5>

                    <h5 class="fw-bold mb-3">3. The link to the Zapier page is: <a
                        href="https://leads.perfectstormnow.com/user/zapier">https://leads.perfectstormnow.com/user/zapier</a>
                    </h5>

                    <h5 class="fw-bold mb-3">4. Highlight the API Key and copy it, then paste it here</h5>
                  </div>
                </div>
              </div>
            </div>
            <!-- 34 Pipedrive -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseThirty" aria-expanded="false" aria-controls="flush-collapseThirty">
                  <div class="col-11"> Pipedrive <br>
                    <img src="{{url('assets/images/PIPEDRIVE.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapseThirty" class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <h4 class="mb-3"> CRM Pipedrive - requires a one time connection to your Open House Wizard Account to
                    allow Open House Sign-in Leads to be accepted...</h4>
                  <hr>
                  <div class="d-flex my-3">
                    <div class="me-3">
                      <img class="img-fluid" src="{{url('assets/images/padlock.png')}}" alt="">
                    </div>
                    <div class="">
                      <h6 class="fw-bold">NOTE: Even though the Open House Wizard website is secured, any outside
                        account
                        passwords provided here are not stored on our website, they are used once to connect your Open
                        House Wizard Account to your CRM Account. </h6>
                      <h5>Please fill in your info using the form below then click SUBMIT.</h5>
                      <p>(This only needs to be done once, if you change the password you can return here to update it.)
                      </p>
                    </div>
                  </div>
                  <hr>
                  <div class="col-12">
                    <form action="" class="border-dashed-black p-3 my-3">
                      <div class="row align-items-end justify-content-center mb-3">
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">Login name or Email Address</label>
                          <input type="text" id="" name="" placeholder="Login name, ID or Email" required="">
                        </div>
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">Password</label>
                          <input type="text" id="" name=""
                            placeholder="Password, used once to connect but will not be stored here." required="">
                        </div>
                      </div>
                      <div class="col-4 m-auto text-center">
                        <button class="btn btn-primary px-5" type="submit" name="">
                          <h3 class="mb-0">SUBMIT</h3>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- 35 Pro Agent Solutions -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseThirtyone" aria-expanded="false"
                  aria-controls="flush-collapseThirtyone">
                  <div class="col-11"> Pro Agent Solutions <br>
                    <img src="{{url('assets/images/PROAGENTSOLUTIONS.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapseThirtyone" class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <div class="row mb-3">
                    <div class="col-4 text-center">
                      <img class="img-fluid border-dashed" src="{{url('assets/images/pro-agent-login.png')}}" alt="">
                    </div>
                    <div class="col-8   ">
                      <h4 class="mb-3">Pro Agent Solutions requires a one time connection to your Open House Wizard
                        Account to allow Open House Sign-in Leads to be accepted...</h4>
                    </div>
                  </div>
                  <hr>
                  <div class="d-flex my-3">
                    <div class="me-3">
                      <img class="img-fluid" src="{{url('assets/images/padlock.png')}}" alt="">
                    </div>
                    <div class="">
                      <h6 class="fw-bold">NOTE: Even though the Open House Wizard website is secured, any outside
                        account
                        passwords provided here are not stored on our website, they are used once to connect your Open
                        House Wizard Account to your Pro Agent Solutions Account.</h6>
                      <h5>Please fill in your info using the form below then click SUBMIT.</h5>
                      <p>(This only needs to be done once, if you change the password you can return here to update it.)
                      </p>
                    </div>
                  </div>
                  <hr>
                  <div class="col-12">
                    <form action="" class="border-dashed-black p-3 my-3">
                      <h3>Pro Agent Info</h3>
                      <div class="row align-items-end justify-content-center mb-3">
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">Login name or Email Address</label>
                          <input type="text" id="" name="" placeholder="Login name, ID or Email" required="">
                        </div>
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">Password</label>
                          <input type="text" id="" name=""
                            placeholder="Password, used once to connect but will not be stored here." required="">
                        </div>
                      </div>
                      <div class="col-4 m-auto text-center">
                        <button class="btn btn-primary px-5" type="submit" name="">
                          <h3 class="mb-0">SUBMIT</h3>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- 36 Real Scout -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseThirtytwo" aria-expanded="false"
                  aria-controls="flush-collapseThirtytwo">
                  <div class="col-11"> Real Scout <br>
                    <img src="{{url('assets/images/real-scout.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapseThirtytwo" class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <div>
                    <h4 class="mb-3"> Real Scout - How to find your API Key.</h4>
                    <h5>If you are using Real Scout, your API Key is required for us to setup your integration to your
                      Open House Sign In Page. So, follow the steps below to find that API Key, then paste it into the
                      box
                      below & click Submit.</h5>
                  </div>
                  <div class="mb-4">
                    <h4 class="fw-bold">Instructions:</h4>
                    <h5 class="fw-bold">Please visit your integrations page at <a
                        href="https://www.realscout.com/agent/marketing/integrations">https://www.realscout.com/agent/marketing/integrations</a>to
                      obtain your access token.</h5>
                  </div>
                  <hr>
                  <div class="col-12">
                    <form action="" class="border-dashed-black p-3 my-3">
                      <div class="d-flex align-items-end justify-content-start mb-3">
                        <div class="me-2">
                          <label class="text-left" for="">Paste your the info noted above here (Api Key, Leads Email
                            Address, etc.)</label>
                          <input type="text" id="" name=""
                            placeholder="Paste your information here to add it to your account." required="">
                        </div>
                        <div>
                          <button class="btn btn-primary px-5" type="submit" name="">
                            <h3 class="mb-0">SUBMIT</h3>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- 37 Real Geeks -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseThirtythree" aria-expanded="false"
                  aria-controls="flush-collapseThirtythree">
                  <div class="col-11"> Real Geeks <br>
                    <img src="{{url('assets/images/REALGEEKS.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapseThirtythree" class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <div class="row mb-3">
                    <div class="col-4 text-center">
                      <img class="img-fluid border-dashed" src="{{url('assets/images/Real-Geeks-Login.png')}}" alt="">
                    </div>
                    <div class="col-8   ">
                      <h4 class="mb-3">Real Geeks requires a one time connection to your Open House Wizard Account to
                        allow Open House Sign-in Leads to be accepted...</h4>
                    </div>
                  </div>
                  <hr>
                  <div class="d-flex my-3">
                    <div class="me-3">
                      <img class="img-fluid" src="{{url('assets/images/padlock.png')}}" alt="">
                    </div>
                    <div class="">
                      <h6 class="fw-bold">NOTE: Even though the Open House Wizard website is secured, any outside
                        account
                        passwords provided here are not stored on our website, they are used once to connect your Open
                        House Wizard Account to your Real Geeks Account.</h6>
                      <h5>Please fill in your info using the form below then click SUBMIT...</h5>
                      <p>(This only needs to be done once, if you change the password you can return here to update it.)
                      </p>
                    </div>
                  </div>
                  <hr>
                  <div class="col-12">
                    <form action="" class="border-dashed-black p-3 my-3">
                      <div class="row align-items-end justify-content-center mb-3">
                        <h3>Real Geeks Info</h3>
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">Login name or Email Address</label>
                          <input type="text" id="" name="" placeholder="Login name, ID or Email" required="">
                        </div>
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">Password</label>
                          <input type="text" id="" name=""
                            placeholder="Password, used once to connect but will not be stored here." required="">
                        </div>
                      </div>
                      <div class="col-4 m-auto text-center">
                        <button class="btn btn-primary px-5" type="submit" name="">
                          <h3 class="mb-0">SUBMIT</h3>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- 38 Realty Juggler -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseThirtyfour" aria-expanded="false"
                  aria-controls="flush-collapseThirtyfour">
                  <div class="col-11"> Realty Juggler <br>
                    <img src="{{url('assets/images/REALTYJUGGLER.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapseThirtyfour" class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <div>
                    <h4 class="mb-3"> CRM Realty Juggler - How to find your Leads Email Address.</h4>
                    <h5>If you are using Realty Juggler CRM your unique Realty Juggler Leads Email Address is required
                      for
                      us to setup your integration to your Open House Sign In Page. So, follow the steps below to find
                      that email address, then paste it into the box below & click Submit.</h5>
                  </div>
                  <hr>
                  <div class="col-12">
                    <form action="" class="border-dashed-black p-3 my-3">
                      <div class="d-flex align-items-end justify-content-start mb-3">
                        <div class="me-2">
                          <label class="text-left" for="">Paste your the info noted above here (Api Key, Leads Email
                            Address, etc.)</label>
                          <input type="text" id="" name=""
                            placeholder="Paste your information here to add it to your account." required="">
                        </div>
                        <div>
                          <button class="btn btn-primary px-5" type="submit" name="">
                            <h3 class="mb-0">SUBMIT</h3>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div>
                    <div class="mb-4">
                      <h4 class="fw-bold">Instructions:</h4>
                      <h5 class="fw-bold mb-3">1. Login to Realty Juggler</h5>
                      <img class="img-fluid  w-100" src="{{url('assets/images/Step1-2.png')}}" alt="">
                    </div>
                    <div class="mb-4">
                      <h5 class="fw-bold mb-3">2. From the 'Main' Screen - Click on the 'Settings' icon</h5>
                      <img class="img-fluid  w-100" src="{{url('assets/images/Step2.png')}}" alt="">
                    </div>
                    <div class="mb-4">
                      <h5 class="fw-bold mb-3">3. Click on the 'Email Feed' icon</h5>
                      <img class="img-fluid  w-100" src="{{url('assets/images/Step3.png')}}" alt="">
                    </div>
                    <div class="mb-4">
                      <h5 class="fw-bold mb-3">4. Copy the 1st email address shown, it starts with 'Prospect'</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- 39 Realvolve -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseThirtyfive" aria-expanded="false"
                  aria-controls="flush-collapseThirtyfive">
                  <div class="col-11"> Realvolve <br>
                    <img src="{{url('assets/images/Realvolve.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapseThirtyfive" class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <h4 class="mb-3">CRM Realvolve - How to find your API Key.</h4>
                  <div class="row mb-3">
                    <div class="col-4 text-center">
                      <img class="img-fluid border-dashed" src="{{url('assets/images/Realvolve.png')}}" alt="">
                    </div>
                    <div class="col-8">
                      <h4 class="mb-3">If you are using Realvolve CRM your Realvolve ZAPIER API Key is required for us
                        to
                        setup your integration to your Open House Sign In Page. So, follow the steps below to find that
                        API Key, then paste it into the box below & click Submit.</h4>
                    </div>
                  </div>
                  <hr>
                  <div class="col-12">
                    <form action="" class="border-dashed-black p-3 my-3">
                      <div class="d-flex align-items-end justify-content-start mb-3">
                        <div class="me-2">
                          <label class="text-left" for="">Paste your the info noted above here (Api Key, Leads Email
                            Address, etc.)</label>
                          <input type="text" id="" name=""
                            placeholder="Paste your information here to add it to your account." required="">
                        </div>
                        <div>
                          <button class="btn btn-primary px-5" type="submit" name="">
                            <h3 class="mb-0">SUBMIT</h3>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div>
                    <div class="mb-4">
                      <h4 class="fw-bold">Instructions:</h4>
                      <h5 class="fw-bold mb-3">1. Login to Realvolve</h5>
                      <img class="img-fluid  w-100" src="{{url('assets/images/Step1-7.png')}}" alt="">
                    </div>
                    <div class="mb-4">
                      <h5 class="fw-bold mb-3">2. Click on the down arrow on the top right of the screen and choose
                        'Settings' (next to the person icon)</h5>
                      <img class="img-fluid" src="{{url('assets/images/Step2-5.png')}}" alt="">
                    </div>
                    <div class="mb-4">
                      <h5 class="fw-bold mb-3">3. Click on the 'Integrations' item on the left side of the screen then
                        copy the ZAPIER API Key</h5>
                      <img class="img-fluid" src="{{url('assets/images/Step3-3.png')}}" alt="">
                    </div>
                    <div class="mb-4">
                      <h5 class="fw-bold mb-3">4. There you will see the Zapier API Key, (letters, numbers and dashes),
                        highlight and copy it, (or click the copy link to the right of it)</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- 40 Rezora -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseThirtysix" aria-expanded="false"
                  aria-controls="flush-collapseThirtysix">
                  <div class="col-11"> Rezora <br>
                    <img src="{{url('assets/images/rezora.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapseThirtysix" class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <h4 class="mb-3">Rezora requires a one time connection to your Open House Wizard Account to allow Open
                    House Sign-in Leads to be accepted...</h4>
                  <div class="d-flex my-3">
                    <div class="me-3">
                      <img class="img-fluid" src="{{url('assets/images/padlock.png')}}" alt="">
                    </div>
                    <div class="">
                      <h6 class="fw-bold">NOTE: Even though the Open House Wizard website is secured, any outside
                        account
                        passwords provided here are not stored on our website, they are used once to connect your Open
                        House Wizard Account to your CRM Account.</h6>
                      <h5>Please fill in your info using the form below then click SUBMIT.</h5>
                      <p>(This only needs to be done once, if you change the password you can return here to update it.)
                      </p>
                    </div>
                  </div>
                  <div>
                    <div class="mb-4">
                      <h4 class="fw-bold">Instructions:</h4>
                      <h5 class="fw-bold mb-3">Your Rezora 'API Username' & 'API Password' are needed to connect to Open
                        House Wizard.</h5>
                      <h5 class="fw-bold mb-3">You can get your unique API Username and API Password from the Apps &
                        Integrations page within your Rezora account.</h5>
                      <h5 class="fw-bold mb-3">NOTE: This is NOT the username and password used to log into your
                        account...</h5>
                      <h5 class="fw-bold mb-3"><a
                          href="http://app.rezora.com/agent_apps.php">http://app.rezora.com/agent_apps.php</a></h5>
                    </div>
                  </div>
                  <div class="col-12">
                    <form action="" class="border-dashed-black p-3 my-3">
                      <div class="row align-items-end justify-content-center mb-3">
                        <h3>Rezora Info</h3>
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">Login name or Email Address</label>
                          <input type="text" id="" name="" placeholder="Login name, ID or Email" required="">
                        </div>
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">Password</label>
                          <input type="text" id="" name=""
                            placeholder="Password, used once to connect but will not be stored here." required="">
                        </div>
                      </div>
                      <div class="col-4 m-auto text-center">
                        <button class="btn btn-primary px-5" type="submit" name="">
                          <h3 class="mb-0">SUBMIT</h3>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- 41 Salesforce -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseThirtyseven" aria-expanded="false"
                  aria-controls="flush-collapseThirtyseven">
                  <div class="col-11"> Salesforce <br>
                    <img src="{{url('assets/images/SALESFORCE.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapseThirtyseven" class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <div class="row mb-3">
                    <div class="col-4 text-center">
                      <img class="img-fluid border-dashed" src="{{url('assets/images/Salesforce.png')}}" alt="">
                    </div>
                    <div class="col-8   ">
                      <h4 class="mb-3">Salesforce requires a one time connection to your Open House Wizard Account to
                        allow Open House Sign-in Leads to be accepted...</h4>
                    </div>
                  </div>
                  <hr>
                  <div class="d-flex my-3">
                    <div class="me-3">
                      <img class="img-fluid" src="{{url('assets/images/padlock.png')}}" alt="">
                    </div>
                    <div class="">
                      <h6 class="fw-bold">NOTE: Even though the Open House Wizard website is secured, any outside
                        account
                        passwords provided here are not stored on our website, they are used once to connect your Open
                        House Wizard Account to your Salesforce Account.</h6>
                      <h5>Please fill in your info using the form below then click SUBMIT.</h5>
                      <p>(This only needs to be done once, if you change the password you can return here to update it.)
                      </p>
                    </div>
                  </div>
                  <hr>
                  <div class="col-12">
                    <form action="" class="border-dashed-black p-3 my-3">
                      <div class="row align-items-end justify-content-center mb-3">
                        <h3>Salesforce Info</h3>
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">Login name or Email Address</label>
                          <input type="text" id="" name="" placeholder="Login name, ID or Email" required="">
                        </div>
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">Password</label>
                          <input type="text" id="" name=""
                            placeholder="Password, used once to connect but will not be stored here." required="">
                        </div>
                      </div>
                      <div class="col-4 m-auto text-center">
                        <button class="btn btn-primary px-5" type="submit" name="">
                          <h3 class="mb-0">SUBMIT</h3>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- 42 Sugar CRM -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseThirtyeight" aria-expanded="false"
                  aria-controls="flush-collapseThirtyeight">
                  <div class="col-11"> Sugar CRM <br>
                    <img src="{{url('assets/images/SugarCRM.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapseThirtyeight" class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <h4 class="fw-bold">SugarCRM requires a one time connection to your Open House Wizard Account to allow
                    Open House Sign-in Leads to be accepted...</h4>
                  <hr>
                  <div class="d-flex my-3">
                    <div class="me-3">
                      <img class="img-fluid" src="{{url('assets/images/padlock.png')}}" alt="">
                    </div>
                    <div class="">
                      <h6 class="fw-bold">NOTE: Even though the Open House Wizard website is secured, any outside
                        account
                        passwords provided here are not stored on our website, they are used once to connect your Open
                        House Wizard Account to your Constant Contact Account.</h6>
                      <h5>Please fill in your info using the form below then click UPDATE.</h5>
                      <p>(This only needs to be done once, if you change the password you can return here to update it.)
                      </p>
                    </div>
                  </div>
                  <hr>
                  <div>
                    <div class="mb-4">
                      <h4 class="fw-bold">Instructions:</h4>
                      <h5 class="fw-bold mb-3">We need your SugarCRM 'Install Url' and a Username with Password that you
                        can create in SugarCRM just for Open House Wizard Leads.</h5>

                      <h4 class="fw-bold">Install URL:</h4>
                      <h5 class="fw-bold mb-3">The full install or on-demand URL. Can be anything from
                        https://trial.sugarcrm.com/sxozsi2129/ to https://crm.mycompany.com/. Make sure to include
                        https://.</h5>
                    </div>
                    <div class="mb-4">
                      <h4 class="fw-bold">Username:</h4>
                      <h5 class="fw-bold mb-3">]You should create a special user with a new, one time password for use
                        with Open House Wizard. Do not use an everyday login! Ask your admin for one if you need to.
                      </h5>
                    </div>
                  </div>
                  <hr>
                  <div class="col-12">
                    <form action="" class="border-dashed-black p-3 my-3">
                      <div class="row align-items-end justify-content-center mb-3">
                        <h3>SugarCRM Info</h3>
                        <div class="col-4 mb-3">
                          <label class="text-left" for="">SugarCRM Install Url</label>
                          <input type="text" id="" name="" placeholder="SugarCRM Install Url" required="">
                        </div>
                        <div class="col-4 mb-3">
                          <label class="text-left" for="">Sugar CRM Username</label>
                          <input type="text" id="" name="" placeholder="Login name, ID or Email" required="">
                        </div>
                        <div class="col-4 mb-3">
                          <label class="text-left" for="">Password</label>
                          <input type="text" id="" name="" placeholder="************" required="">
                        </div>
                      </div>
                      <div class="col-4 m-auto text-center">
                        <button class="btn btn-primary px-5" type="submit" name="">
                          <h3 class="mb-0">SUBMIT</h3>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- 43 Sweepbright -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseThirtynine" aria-expanded="false"
                  aria-controls="flush-collapseThirtynine">
                  <div class="col-11"> Sweepbright <br>
                    <img src="{{url('assets/images/sweepbright.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapseThirtynine" class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <h4 class="fw-bold">Sweepbright requires a one time connection to your Open House Wizard Account to
                    allow Open House Sign-in Leads to be accepted...</h4>
                  <hr>
                  <div class="d-flex my-3">
                    <div class="me-3">
                      <img class="img-fluid" src="{{url('assets/images/padlock.png')}}" alt="">
                    </div>
                    <div class="">
                      <h6 class="fw-bold">NOTE: Even though the Open House Wizard website is secured, any outside
                        account
                        passwords provided here are not stored on our website, they are used once to connect your Open
                        House Wizard Account to your CRM Account.</h6>
                      <h5>Please fill in your info using the form below then click SUBMIT.</h5>
                      <p>(This only needs to be done once, if you change the password you can return here to update it.)
                      </p>
                    </div>
                  </div>
                  <hr>
                  <div class="col-12">
                    <form action="" class="border-dashed-black p-3 my-3">
                      <div class="row align-items-end justify-content-center mb-3">
                        <h3>Daylite Info</h3>
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">Login name or Email Address</label>
                          <input type="text" id="" name="" placeholder="Login name, ID or Email" required="">
                        </div>
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">Password</label>
                          <input type="text" id="" name=""
                            placeholder="Password, used once to connect but will not be stored here." required="">
                        </div>
                      </div>
                      <div class="col-4 m-auto text-center">
                        <button class="btn btn-primary px-5" type="submit" name="">
                          <h3 class="mb-0">SUBMIT</h3>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- 44 Top Producer -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseFourty" aria-expanded="false" aria-controls="flush-collapseFourty">
                  <div class="col-11"> Top Producer <br>
                    <img src="{{url('assets/images/TOP-PRODUCER.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapseFourty" class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <h4 class="fw-bold">Top Producer requires a one time connection to your Open House Wizard Account to
                    allow Open House Sign-in Leads to be accepted...</h4>
                  <hr>
                  <div class="d-flex my-3">
                    <div class="me-3">
                      <img class="img-fluid" src="{{url('assets/images/padlock.png')}}" alt="">
                    </div>
                    <div class="">
                      <h6 class="fw-bold">NOTE: Even though the Open House Wizard website is secured, any outside
                        account
                        passwords provided here are not stored on our website, they are used once to connect your Open
                        House Wizard Account to your CRM Account.</h6>
                      <h5>Please fill in your info using the form below then click SUBMIT.</h5>
                      <p>(This only needs to be done once, if you change the password you can return here to update it.)
                      </p>
                    </div>
                  </div>
                  <hr>
                  <div class="col-12">
                    <form action="" class="border-dashed-black p-3 my-3">
                      <div class="row align-items-end justify-content-center mb-3">
                        <h3>Top Producer Info</h3>
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">Login name or Email Address</label>
                          <input type="text" id="" name="" placeholder="Login name, ID or Email" required="">
                        </div>
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">Password</label>
                          <input type="text" id="" name=""
                            placeholder="Password, used once to connect but will not be stored here." required="">
                        </div>
                      </div>
                      <div class="col-4 m-auto text-center">
                        <button class="btn btn-primary px-5" type="submit" name="">
                          <h3 class="mb-0">SUBMIT</h3>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- 45 Tribus -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseFourtyone" aria-expanded="false"
                  aria-controls="flush-collapseFourtyone">
                  <div class="col-11"> Tribus <br>
                    <img src="{{url('assets/images/tribus.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapseFourtyone" class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <h4 class="fw-bold">Tribus - How to find your API Key.</h4>
                  <h5>If you are using Tribus your API Key and Tribus Website Url are required for us to setup the
                    integration to your Open House Sign In Page. So, follow the steps below to find that API Key &
                    Website
                    Url then paste it into the box below & click Submit.</h5>
                  <hr>
                  <div class="mb-4">
                    <h4 class="fw-bold"> Instructions: </h4>
                    <h5 class="fw-bold mb-3">API Key</h5>
                    <h5 class="fw-bold mb-3">Found on the IDX Settings page of your TRIBUS website.</h5>
                    <h5 class="fw-bold mb-3">TRIBUS Website</h5>
                    <h5 class="fw-bold mb-3">Your website domain - paste the full URL.</h5>
                  </div>
                  <hr>
                  <div class="col-12">
                    <form action="" class="border-dashed-black p-3 my-3">
                      <div class="row align-items-end justify-content-center mb-3">
                        <h3>Top Producer Info</h3>
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">Paste your the info noted above here (Api Key, Leads Email
                            Address, etc.)</label>
                          <input type="text" id="" name=""
                            placeholder="Paste your information here to add it to your account." required="">
                        </div>
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">If Asked to provide an API Url or Website Url in Addition to
                            an
                            API Key - Please paste it here.</label>
                          <input type="text" id="" name=""
                            placeholder="Paste your information here to add it to your account." required="">
                        </div>
                      </div>
                      <div class="col-4 m-auto text-center">
                        <button class="btn btn-primary px-5" type="submit" name="">
                          <h3 class="mb-0">SUBMIT</h3>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- 46 Twilio -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseFourtytwo" aria-expanded="false"
                  aria-controls="flush-collapseFourtytwo">
                  <div class="col-11"> Twilio <br>
                    <img src="{{url('assets/images/Twilio.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapseFourtytwo" class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <div>
                    <h4 class="">Twilio - How to find your Account SID and Auth Token</h4>
                    <h5>To send text messages, we have added support for Twilio which is an online Text / SMS messaging
                      service.</h5>
                    <h5><a href="https://openhousewiz.com/setup-twilio/">Click Here for a help page detailing the steps
                        needed to setup your Twilio Account.</a></h5>
                    <h5>If you already have an account with a different Online SMS / MMS Texting Service such as
                      'ClickSend SMS', RingCentral', 'SlyBroadcast' or 'BurstSMS' to name a few - please Contact Support
                      and we'll see if it can be added to your account.</h5>
                  </div>
                  <div>
                    <ul>
                      <li>1st Setup a Twilio Account at <a href="https://www.twilio.com/en-us">www.Twilio.com</a></li>
                      <li>Select a Phone Number to use</li>
                      <li>Login to your Twilio account and click on 'Console' at the top of the page</li>
                      <li>On this page you will see your Account SID and Auth Token (hidden but you can click 'View')
                      </li>
                      <li>Copy each and paste them below **If you cannot find them, contact Twilio Support and they can
                        assist you</li>
                    </ul>
                    <img src="{{url('assets/images/api.jpg')}}" alt="">
                  </div>
                  <hr>
                  <div class="mb-4">
                    <h4 class="fw-bold"> Instructions: </h4>
                    <h5 class="fw-bold mb-3">Paste your Account SID in the 1st box and the Auth Token in the 2nd box
                      below
                      & click Submit.</h5>
                    <h5 class="fw-bold mb-3">IMPORTANT: After this please notify Support that you have added Twilio to
                      your account so that your account can be configured to now work with Twilio & send Text Welcome
                      messages.</h5>
                  </div>
                  <hr>
                  <div class="col-12">
                    <form action="" class="border-dashed-black p-3 my-3">
                      <div class="row align-items-end justify-content-center mb-3">
                        <h3>Top Producer Info</h3>
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">Paste your the info noted above here (Api Key, Leads Email
                            Address, etc.)</label>
                          <input type="text" id="" name=""
                            placeholder="Paste your information here to add it to your account." required="">
                        </div>
                        <div class="col-6 mb-3">
                          <label class="text-left" for="">If Asked to provide an API Url or Website Url in Addition to
                            an
                            API Key - Please paste it here.</label>
                          <input type="text" id="" name=""
                            placeholder="Paste your information here to add it to your account." required="">
                        </div>
                      </div>
                      <div class="col-4 m-auto text-center">
                        <button class="btn btn-primary px-5" type="submit" name="">
                          <h3 class="mb-0">SUBMIT</h3>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!--47  Wise Agent -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseFourtythreee" aria-expanded="false"
                  aria-controls="flush-collapseFourtythreee">
                  <div class="col-11"> Wise Agent <br>
                    <img src="{{url('assets/images/WISE-AGENT.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapseFourtythreee" class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <div>
                    <h4 class="mb-3">CRM Wise Agent - How to find your Leads Email Address. </h4>
                    <h5>If you are using Wise Agent CRM your unique Wise Agent Leads Email Address is required for us to
                      setup your integration to your Open House Sign In Page. So, follow the steps below to find that
                      email address, then paste it into the box below & click Submit.</h5>
                  </div>
                  <hr>
                  <div class="col-12">
                    <form action="" class="border-dashed-black p-3 my-3">
                      <div class="d-flex align-items-end justify-content-start mb-3">
                        <div class="me-2">
                          <label class="text-left" for="">Paste your the info noted above here (Api Key, Leads Email
                            Address, etc.)</label>
                          <input type="text" id="" name=""
                            placeholder="Paste your information here to add it to your account." required="">
                        </div>
                        <div>
                          <button class="btn btn-primary px-5" type="submit" name="">
                            <h3 class="mb-0">SUBMIT</h3>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div>
                    <div class="mb-4">
                      <h4 class="fw-bold">Instructions:</h4>
                      <h5 class="fw-bold mb-3">1. Login to Wise Agent</h5>
                      <img class="img-fluid  w-100" src="{{url('assets/images/WAStep1.png')}}" alt="">
                    </div>
                    <div class="mb-4">
                      <h5 class="fw-bold mb-3">2. From the Main Screen - Click on the round gear 'Settings' icon on the
                        upper right side of the screen next to your name then choose the 'Integrations Menu' option</h5>
                      <img class="img-fluid  w-100" src="{{url('assets/images/WAStep2.png')}}" alt="">
                    </div>
                    <div class="mb-4">
                      <h5 class="fw-bold mb-3">3. Click on the 'Wise Agent Integrations' item</h5>
                      <img class="img-fluid  w-100" src="{{url('assets/images/WAStep3.png')}}" alt="">
                    </div>
                    <div class="mb-4">
                      <h5 class="fw-bold mb-3">4. Copy the Email Address shown, it is to the right of the text 'Lead
                        Capture Email'.</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- 48 Zapier -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseFourtyfour" aria-expanded="false"
                  aria-controls="flush-collapseFourtyfour">
                  <div class="col-11"> Zapier <br>
                    <img src="{{url('assets/images/zapier.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapseFourtyfour" class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <div>
                    <h4 class="mb-3"> Zapier - Connect your Open House Wizard Account to Any of Zapier's 1500+ Apps &
                      Services</h4>
                    <h5>If you want to setup your own connection(s) using Zapier we will need a 'webhook' pasted below
                      from your Zap.</h5>
                  </div>
                  <hr>
                  <div>
                    <div class="">
                      <h4 class="fw-bold">To create a Zap for Open House Wizard:</h4>
                      <ul>
                        <li>1st Choose 'Gravity Forms' as the 'App' to start with in your Zap</li>
                        <li>Then for 'Trigger Type', choose 'New Form Submission'</li>
                        <li>After that, under 'Setup the Webhook', copy the 'Webhook' then paste it below and choose
                          Submit to save it to your account here</li>
                        <li>After clicking Submit, Run an Open House page and do a test sign-in</li>
                        <li>Next in Zapier under 'Find Data' you should see your Test sign in appear (If not, do another
                          test and use the find samples button)</li>
                        <li>Click the Sample, then Click 'Done Editing'</li>
                        <li>After this you can add your Connection to your CRM or other Service as the next step in the
                          Zap</li>
                        <li>Make sure to turn your Zap 'On' at the end or it won't work</li>
                      </ul>

                    </div>
                    <hr>
                    <div class="col-12">
                      <form action="" class="border-dashed-black p-3 my-3">
                        <div class="row align-items-end justify-content-centers">
                          <div class="col-6 mb-3">
                            <label class="text-left" for="">Paste your Zapier webhook here</label>
                            <input type="text" id="" name="" placeholder="Paste your Zapier webhook here" required="">
                            <p>Warning, if you are currently setup here with a CRM or other connection this will
                              override
                              that connection.</p>
                            <p>Once you save your Zapier webhook your connection is now in place. Test with a sign-in
                              afterwards to make sure your Zap is working correctly. If not, you can then make
                              adjustments
                              to your Zap on the Zapier.com website.</p>
                            <div class="mb-3">
                              <label class="text-left" for="">What CRM or Service will you be connecting to?</label>
                              <input type="text" id="" name="" placeholder="" value="Zapier" required="">
                            </div>
                          </div>
                        </div>
                        <div class="text-start">
                          <button class="btn btn-primary px-5" type="submit" name="">
                            <h3 class="mb-0">SUBMIT</h3>
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
             <!--49 Zoho CRM -->
             <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseFourtyfive" aria-expanded="false"
                  aria-controls="flush-collapseFourtyfive">
                  <div class="col-11"> Zoho CRM <br>
                    <img src="{{url('assets/images/ZOHO-CRM.jpg')}}" alt="">
                  </div>
                </button>
              </h2>
              <div id="flush-collapseFourtyfive" class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <div>
                    <h4 class="mb-3">ZOHO CRM - How to find your 'AUTH Token'.</h4>
                    <h5>If you are using ZOHO CRM your ZOHO CRM AUTH Token is required for us to setup your
                      integration
                      to your Open House Sign In Page. So, follow the steps below to find that AUTH Token, then paste
                      it
                      into the box below & click Submit.</h5>
                  </div>
                  <hr>
                  <div class="col-12">
                    <form action="" class="border-dashed-black p-3 my-3">
                      <div class="d-flex align-items-end justify-content-start mb-3">
                        <div class="me-2">
                          <label class="text-left" for="">Paste your the info noted above here (Api Key, Leads Email
                            Address, etc.)</label>
                          <input type="text" id="" name=""
                            placeholder="Paste your information here to add it to your account." required="">
                        </div>
                        <div>
                          <button class="btn btn-primary px-5" type="submit" name="">
                            <h3 class="mb-0">SUBMIT</h3>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div>
                    <div class="mb-4">
                      <h4 class="fw-bold"> Instructions: </h4>
                      <h5 class="fw-bold mb-3">1. Login to ZOHO CRM</h5>
                    </div>
                    <div class="mb-4">
                      <h5 class="fw-bold mb-3">2. Paste this link into a browser to generate your token:
                        https://accounts.zoho.com/apiauthtoken/create?SCOPE=ZohoCRM/crmapi or <a
                          href="https://accounts.zoho.com/apiauthtoken/create?SCOPE=ZohoCRM/crmapi">click this
                          link</a>
                        to generate the token</h5>
                      <img class="img-fluid w-100" src="{{url('assets/images/Zoho-Auth-Token.png')}}" alt="">
                    </div>
                    <div class="mb-4">
                      <h5 class="fw-bold mb-3">3. Highlight and copy the text (numbers and letters) after the
                        'AUTHTOKEN=' as shown above.</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </section>
@endsection