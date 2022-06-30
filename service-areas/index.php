<?php
include($_SERVER['DOCUMENT_ROOT'].'/main_action.php');

$site_title = "Service Areas";
$site_description = "Learn about the location of our business locations in NYC and also the neighborhoods that we service!";
$site_keywords = "Alphabet City mobile auto detailing, Astoria mobile auto detailing, Bath Beach mobile auto detailing, Battery Park City mobile auto detailing, Bay Ridge mobile auto detailing, Bay Terrace mobile auto detailing, Bayside mobile auto detailing, Bedford-Stuyvesant mobile auto detailing, Bensonhurst mobile auto detailing, Boerum Hill mobile auto detailing, Briarwood mobile auto detailing, Brooklyn Heights mobile auto detailing, Brownsville mobile auto detailing, Bushwick mobile auto detailing, Canarsie mobile auto detailing, Carroll Gardens mobile auto detailing, Chelsea mobile auto detailing, Chinatown mobile auto detailing, Clinton Hill mobile auto detailing, Cobble Hill mobile auto detailing, College Point mobile auto detailing, Columbus Circle mobile auto detailing, Coney Island mobile auto detailing, Corona mobile auto detailing, Crown Heights mobile auto detailing, Cypress Hills mobile auto detailing, Ditmars mobile auto detailing, Ditmas Park mobile auto detailing, Downtown Brooklyn mobile auto detailing, DUMBO mobile auto detailing, Dyker Heights mobile auto detailing, East Elmhurst mobile auto detailing, East Flatbush mobile auto detailing, East Harlem mobile auto detailing, East New York mobile auto detailing, East Village mobile auto detailing, Elmhurst mobile auto detailing, Far Rockaway mobile auto detailing, Farragut mobile auto detailing, Financial District mobile auto detailing, Fiske Terrace mobile auto detailing, Flatbush mobile auto detailing, Flatiron District mobile auto detailing, Flatlands mobile auto detailing, Floral Park mobile auto detailing, Flushing,  mobile auto detailing, Forest Hills mobile auto detailing, Fort Greene mobile auto detailing, Fresh Meadows mobile auto detailing, Fresh Pond mobile auto detailing, Glen Oaks mobile auto detailing, Glendale mobile auto detailing, Gowanus mobile auto detailing, Gramercy Park mobile auto detailing, Gravesend mobile auto detailing, Greenpoint mobile auto detailing, Greenwich Village mobile auto detailing, Hamilton Beach mobile auto detailing, Hamilton Heights mobile auto detailing, Harlem mobile auto detailing, Hell's Kitchen mobile auto detailing, Highland Park mobile auto detailing, Howard Beach mobile auto detailing, Howard Park mobile auto detailing, Hudson Yards mobile auto detailing, Inwood mobile auto detailing, Jackson Heights mobile auto detailing, Jamaica Park mobile auto detailing, Kensing, ton mobile auto detailing, Kew Gardens mobile auto detailing, Kips Bay mobile auto detailing, Koreatown mobile auto detailing, Laurelton mobile auto detailing, Lincoln Square mobile auto detailing, Little Italy mobile auto detailing, Little Neck mobile auto detailing, Long Island City mobile auto detailing, Lower East Side mobile auto detailing, Madison mobile auto detailing, Manhattan Beach mobile auto detailing, Mapleton mobile auto detailing, Marine Park mobile auto detailing, Maspeth mobile auto detailing, Meatpacking,  District mobile auto detailing, Middle Village mobile auto detailing, Midtown mobile auto detailing, Midtown East mobile auto detailing, Midtown West mobile auto detailing, Midwood mobile auto detailing, Mill Basin mobile auto detailing, Morning, side Heights mobile auto detailing, Murray Hill mobile auto detailing, New Lots mobile auto detailing, New Utrecht mobile auto detailing, NoHo mobile auto detailing, Nolita mobile auto detailing, NoMad mobile auto detailing, Ocean Hill mobile auto detailing, Ozone Park mobile auto detailing, Park Slope mobile auto detailing, Plum Beach mobile auto detailing, Prospect Heights mobile auto detailing, Prospect Lefferts Gardens mobile auto detailing, Prospect Park South mobile auto detailing, Rego Park mobile auto detailing, Ridgewood mobile auto detailing, Rockaway Beach mobile auto detailing, Seagate mobile auto detailing, Sheepshead Bay mobile auto detailing, SoHo mobile auto detailing, Spring, field Gardens mobile auto detailing, Stuyvesant Heights mobile auto detailing, Stuyvesant Town mobile auto detailing, Sunnyside mobile auto detailing, Sunset Park mobile auto detailing, Times Square mobile auto detailing, Tribeca mobile auto detailing, Tudor Village mobile auto detailing, Union Square mobile auto detailing, Upper East Side mobile auto detailing, Upper West Side mobile auto detailing, Washing, ton Heights mobile auto detailing, Weeksville mobile auto detailing, West Village mobile auto detailing, Whitestone mobile auto detailing, Williamsburg mobile auto detailing, Windsor Terrace mobile auto detailing, Woodhaven mobile auto detailing, Woodside mobile auto detailing, Wyckoff Heights mobile auto detailing";
$canonical = "";
$og_site_title = "";
$og_description = "";
$og_title = "";
$og_url = "";
$og_image = "";
$ld_json = <<<LD_JSON

LD_JSON;
$locations = mysqli_query($connection,"SELECT `id`,`name`,`url` FROM locations ORDER BY id ASC");
//$locations = mysqli_fetch_array($locations_list);

?>
<?php
$bodyClass = 'service-template-default single single-service postid-2172 group-blog';
include ($_SERVER['DOCUMENT_ROOT'].'/header-optimize.php');
?>
<section id="offering-services" class="py-6 service-areas" data-connection="<?php echo count($locations) ?>">
  <div class="container">
    <div class="row">
      <div class="col heading-text">
        <h3 class="text-green text-center fs-2 fs-md-5 lh-1-3 lh-md-auto">Our Award Winning Service Available In...</h3>
      </div>
    </div>
    <div class="row">
      <div class="col heading-text pb-0">
        <h3 class="text-blue fs-3 fs-md-5 lh-1-3 lh-md-auto text-center text-lg-start">Service Areas In the 5 Boroughs of NYC</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div id="london" class="area-specific last london">
          <div class="area-detail">
            <div  class="inner-heading">
              <h5><a href="../service-areas/">Our Branches</a></h5>
            </div>
            <div class="outer-detail row mx-0" id="our-branches">
              <?php if(count($locations)):?>
                <?php foreach ($locations as $location): ?>
                  <div class="col-md-3">
                    <h6><i class="fa">&#xf054;</i><a title="<?php echo $location['name']?>" href="/service-areas/business-locations/<?php echo $location['url']?>"><?php echo $location['name']?></a></h6>
                  </div>
                <?php endforeach; ?>
              <?php endif; ?>
            </div>
          </div>
          <div class="area-detail">
            <div  class="inner-heading">
              <h5><a href="../service-areas/">Service Areas in NYC</a></h5>
            </div>
            <div class="outer-detail row mx-0">
              <div class="col-md-3">
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Alphabet City" href="../service-areas/">Alphabet City</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Astoria" href="../service-areas/">Astoria</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Bath Beach" href="../service-areas/">Bath Beach</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Battery Park City" href="../service-areas/">Battery Park City</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Bay Ridge" href="../service-areas/">Bay Ridge</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Bay Terrace" href="../service-areas/">Bay Terrace</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Bayside" href="../service-areas/">Bayside</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Bedford-Stuyvesant" href="../service-areas/">Bedford-Stuyvesant</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Bensonhurst" href="../service-areas/">Bensonhurst</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Boerum Hill" href="../service-areas/">Boerum Hill</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Briarwood" href="../service-areas/">Briarwood</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Brooklyn Heights" href="../service-areas/">Brooklyn Heights</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Brownsville" href="../service-areas/">Brownsville</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Bushwick" href="../service-areas/">Bushwick</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Canarsie" href="../service-areas/">Canarsie</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Carroll Gardens" href="../service-areas/">Carroll Gardens</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Chelsea" href="../service-areas/">Chelsea</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Chinatown " href="../service-areas/">Chinatown</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Clinton Hill " href="../service-areas/">Clinton Hill</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Cobble Hill" href="../service-areas/">Cobble Hill</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing College Point" href="../service-areas/">College Point</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Columbus Circle" href="../service-areas/">Columbus Circle</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Coney Island" href="../service-areas/">Coney Island</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Corona" href="../service-areas/">Corona</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Crown Heights" href="../service-areas/">Crown Heights</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Cypress Hills" href="../service-areas/">Cypress Hills</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Ditmars" href="../service-areas/">Ditmars</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Ditmas Park" href="../service-areas/">Ditmas Park</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Downtown Brooklyn" href="../service-areas/">Downtown Brooklyn</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing DUMBO" href="../service-areas/">DUMBO</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Dyker Heights" href="../service-areas/">Dyker Heights</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing East Elmhurst" href="../service-areas/">East Elmhurst</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing East Flatbush" href="../service-areas/">East Flatbush</a></h6>
              </div>
              <div class="col-md-3">
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing East Harlem" href="../service-areas/">East Harlem</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing East New York" href="../service-areas/">East New York</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing East Village" href="../service-areas/">East Village</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Elmhurst" href="../service-areas/">Elmhurst</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Far Rockaway" href="../service-areas/">Far Rockaway</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Farragut" href="../service-areas/">Farragut</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Financial District" href="../service-areas/">Financial District</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Fiske Terrace" href="../service-areas/">Fiske Terrace</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Flatbush" href="../service-areas/">Flatbush</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Flatiron District" href="../service-areas/">Flatiron District</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Flatlands" href="../service-areas/">Flatlands</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Floral Park" href="../service-areas/">Floral Park</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Flushing" href="../service-areas/">Flushing</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Forest Hills" href="../service-areas/">Forest Hills</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Fort Greene" href="../service-areas/">Fort Greene</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Fresh Meadows" href="../service-areas/">Fresh Meadows</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Fresh Pond" href="../service-areas/">Fresh Pond</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Glen Oaks" href="../service-areas/">Glen Oaks</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Glendale" href="../service-areas/">Glendale</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Gowanus" href="../service-areas/">Gowanus</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Gramercy Park" href="../service-areas/">Gramercy Park</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Gravesend" href="../service-areas/">Gravesend</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Greenpoint" href="../service-areas/">Greenpoint</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Greenwich Village" href="../service-areas/">Greenwich Village</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Hamilton Beach" href="../service-areas/">Hamilton Beach</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Hamilton Heights" href="../service-areas/">Hamilton Heights</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Harlem" href="../service-areas/">Harlem</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Hell's Kitchen " href="../service-areas/">Hell's Kitchen</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Highland Park" href="../service-areas/">Highland Park</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Howard Beach" href="../service-areas/">Howard Beach</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Howard Park" href="../service-areas/">Howard Park</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Deptford" href="../service-areas/">Hudson Yards</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Inwood" href="../service-areas/">Inwood</a></h6>
              </div>
              <div class="col-md-3">
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Jackson Heights" href="../service-areas/">Jackson Heights</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Jamaica Park" href="../service-areas/">Jamaica Park</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Kensington" href="../service-areas/">Kensington</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Kew Gardens" href="../service-areas/">Kew Gardens</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Kips Bay" href="../service-areas/">Kips Bay</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Koreatown" href="../service-areas/">Koreatown</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Laurelton" href="../service-areas/">Laurelton</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Lincoln Square" href="../service-areas/">Lincoln Square</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Little Italy" href="../service-areas/">Little Italy</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Little Neck" href="../service-areas/">Little Neck</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Long Island City" href="../service-areas/">Long Island City</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Lower East Side" href="../service-areas/">Lower East Side</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Madison" href="../service-areas/">Madison</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Manhattan Beach" href="../service-areas/">Manhattan Beach</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Mapleton" href="../service-areas/">Mapleton</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Marine Park" href="../service-areas/">Marine Park</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Maspeth" href="../service-areas/">Maspeth</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Meatpacking District" href="../service-areas/">Meatpacking District</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Middle Village" href="../service-areas/">Middle Village</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Midtown" href="../service-areas/">Midtown</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Midtown West" href="../service-areas/">Midtown East</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Fulwell" href="../service-areas/">Midtown West</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Midwood" href="../service-areas/">Midwood</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Mill Basin" href="../service-areas/">Mill Basin</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Morningside Heights" href="../service-areas/">Morningside Heights</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Murray Hill" href="../service-areas/">Murray Hill</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing New Lots" href="../service-areas/">New Lots</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing New Utrecht" href="../service-areas/">New Utrecht</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing NoHo" href="../service-areas/">NoHo</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Nolita" href="../service-areas/">Nolita</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing NoMad" href="../service-areas/">NoMad</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Ocean Hill" href="../service-areas/">Ocean Hill</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Ozone Park" href="../service-areas/">Ozone Park</a></h6>
              </div>
              <div class="col-md-3">
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Park Slope" href="../service-areas/">Park Slope</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Plum Beach" href="../service-areas/">Plum Beach</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Prospect Heights" href="../service-areas/">Prospect Heights</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Prospect Lefferts Gardens" href="../service-areas/">Prospect Lefferts Gardens</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Prospect Park South" href="../service-areas/">Prospect Park South</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Queens Village" href="../service-areas/">Rego Park</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Ridgewood" href="../service-areas/">Ridgewood</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Rockaway Beach" href="../service-areas/">Rockaway Beach</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Seagate" href="../service-areas/">Seagate</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Sheepshead Bay" href="../service-areas/">Sheepshead Bay</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing SoHo" href="../service-areas/">SoHo</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Springfield Gardens" href="../service-areas/">Springfield Gardens</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Stuyvesant Heights" href="../service-areas/">Stuyvesant Heights</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Stuyvesant Town" href="../service-areas/">Stuyvesant Town</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Sunnyside" href="../service-areas/">Sunnyside</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Sunset Park" href="../service-areas/">Sunset Park</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Times Square" href="../service-areas/">Times Square</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Tribeca" href="../service-areas/">Tribeca</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Tudor Village" href="../service-areas/">Tudor Village</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Union Square" href="../service-areas/">Union Square</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Upper East Side" href="../service-areas/">Upper East Side</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Upper West Side" href="../service-areas/">Upper West Side</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Washington Heights" href="../service-areas/">Washington Heights</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Weeksville" href="../service-areas/">Weeksville</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing West Village" href="../service-areas/">West Village</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Whitestone" href="../service-areas/">Whitestone</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Williamsburg" href="../service-areas/">Williamsburg</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Windsor Terrace" href="../service-areas/">Windsor Terrace</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Woodhaven" href="../service-areas/">Woodhaven</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Woodside" href="../service-areas/">Woodside</a></h6>
                <h6><i class="fa">&#xf054;</i><a title="Auto Detailing Wyckoff Heights" href="../service-areas/">Wyckoff Heights</a></h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
include ($_SERVER['DOCUMENT_ROOT'].'/partials/footer-top.php');
include ($_SERVER['DOCUMENT_ROOT'].'/footer-optimize.php');
?>
