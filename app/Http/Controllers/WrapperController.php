<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WrapperController extends Controller
{
    public function forward(){
        $json= Http::get('https://services5.arcgis.com/tMUv40jPkGf3F4zc/ArcGIS/rest/services/001/FeatureServer/0/query?where=&objectIds=&time=&geometry=%7B%22spatialReference%22%3A%7B%22wkid%22%3A4490%7D%2C%22x%22%3A114.64183244708673%2C%22y%22%3A24.03560714079256%7D&geometryType=esriGeometryPoint&inSR=4490&spatialRel=esriSpatialRelIntersects&resultType=none&distance=0.0&units=esriSRUnit_Meter&returnGeodetic=false&outFields=&returnGeometry=true&returnCentroid=false&featureEncoding=esriDefault&multipatchOption=xyFootprint&maxAllowableOffset=&geometryPrecision=&outSR=&datumTransformation=&applyVCSProjection=false&returnIdsOnly=false&returnUniqueIdsOnly=false&returnCountOnly=false&returnExtentOnly=false&returnQueryGeometry=false&returnDistinctValues=false&cacheHint=false&orderByFields=&groupByFieldsForStatistics=&outStatistics=&having=&resultOffset=&resultRecordCount=&returnZ=false&returnM=false&returnExceededLimitFeatures=true&quantizationParameters=&sqlFormat=none&f=json&token=')->json();
        return response()->json($json);
    }
    public function forwardw(){
        $json= Http::get('https://wse.ls.hereapi.com/2/findsequence.json?start=Berlin-Main-Station;52.52282,13.37011&destination1=East-Side-Gallery;52.50341,13.44429&destination2=Olympiastadion;52.51293,13.24021&end=HERE-Berlin-Campus;52.53066,13.38511&mode=fastest;car&apiKey=TIiNfmhUIWGq-nf8U9-5p6-xrGPn08pbYZpMVwRGdUo')->json();
        return response()->json($json);
    }
}
