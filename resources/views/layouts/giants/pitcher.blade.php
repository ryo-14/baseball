<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
       <meta charset="utf-16">  
       <meta htt-equiv="X-UA=Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       
       <meta name="csrf-token" content="{{csrf_token() }}">
       
       <script src="{{ secure_asset('js/app.js') }}"defer></script>
       
       <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@500&display=swap" rel="stylesheet">
       <style>
                html, body {
                    background-color: #ff9900;
                    color: #000000;
                    font-family: 'Kiwi Maru', serif;
                }
                
                .content {
                  text-align: center;
                }
                .content-left {
                  text-align: left;
                }
                
                .title {
                    font-size: 30px;
                }
    
               
                .lists{
                    list-style: disc url(images/sample_list_marker.png) outside;
                    margin: 0px 0px 0px 30px;
                }
    
                .position-ref {
                    position: relative;
                }
    
                .top-right {
                    position: absolute;
                    right: 10px;
                    top: 18px;
                }
               
                .links > a {
                    color: #636b6f;
                    padding: 0 25px;
                    font-size: 20px;
                    font-weight: 600;
                    letter-spacing: .1rem;
                    text-decoration: none;
                    text-transform: uppercase;
                }
    
                .m-b-md {
                    margin-bottom: 30px;
                }
            </style>
            
            <div class="title content">
　            <a>能力値一覧</a>
　            </div>
　            <div class="lists content-left">
　              <li>球速</li>
    　             <select name='speed'>
    　                 <option value='false'>select</option>
                      <option value='under130'>130以下</option>
                      <option value='130'>130</option>
                      <option value='131'>131</option>
                      <option value='132'>132</option>
                      <option value='133'>133</option>
                      <option value='134'>134</option>
                      <option value='135'>135</option>
                      <option value='136'>136</option>
                      <option value='137'>137</option>
                      <option value='138'>138</option>
                      <option value='139'>139</option>
                      <option value='140'>140</option>
                      <option value='141'>141</option>
                      <option value='142'>142</option>
                      <option value='143'>143</option>
                      <option value='144'>144</option>
                      <option value='145'>145</option>
                      <option value='146'>146</option>
                      <option value='147'>147</option>
                      <option value='148'>148</option>
                      <option value='149'>149</option>
                      <option value='150'>150</option>
                      <option value='151'>151</option>
                      <option value='152'>152</option>
                      <option value='153'>153</option>
                      <option value='154'>154</option>
                      <option value='155'>155</option>
                      <option value='156'>156</option>
                      <option value='157'>157</option>
                      <option value='158'>158</option>
                      <option value='159'>159</option>
                      <option value='160'>160</option>
                      <option value='161'>161</option>
                      <option value='162'>162</option>
                      <option value='163'>163</option>
                      <option value='164'>164</option>
                      <option value='165'>165</option>
                      <option value='166'>166</option>
                      <option value='167'>167</option>
                      <option value='168'>168</option>
                      <option value='169'>169</option>
                      <option value='170over'>170以上</option>
                  </select>
                    <a>~</a>
                    <a>max</a>
                  <select name='max speed'>
    　                 <option value='false'>select</option>
                      <option value='under130'>130以下</option>
                      <option value='130'>130</option>
                      <option value='131'>131</option>
                      <option value='132'>132</option>
                      <option value='133'>133</option>
                      <option value='134'>134</option>
                      <option value='135'>135</option>
                      <option value='136'>136</option>
                      <option value='137'>137</option>
                      <option value='138'>138</option>
                      <option value='139'>139</option>
                      <option value='140'>140</option>
                      <option value='141'>141</option>
                      <option value='142'>142</option>
                      <option value='143'>143</option>
                      <option value='144'>144</option>
                      <option value='145'>145</option>
                      <option value='146'>146</option>
                      <option value='147'>147</option>
                      <option value='148'>148</option>
                      <option value='149'>149</option>
                      <option value='150'>150</option>
                      <option value='151'>151</option>
                      <option value='152'>152</option>
                      <option value='153'>153</option>
                      <option value='154'>154</option>
                      <option value='155'>155</option>
                      <option value='156'>156</option>
                      <option value='157'>157</option>
                      <option value='158'>158</option>
                      <option value='159'>159</option>
                      <option value='160'>160</option>
                      <option value='161'>161</option>
                      <option value='162'>162</option>
                      <option value='163'>163</option>
                      <option value='164'>164</option>
                      <option value='165'>165</option>
                      <option value='166'>166</option>
                      <option value='167'>167</option>
                      <option value='168'>168</option>
                      <option value='169'>169</option>
                      <option value='170over'>170以上</option>
                  </select>
　              <li>スタミナ</li>
　              <li>コントロール</li>
　               </select>
　              </div>
　                <div class="lists content">
　              <li>決め球</li>
　              <li>球種</li>
　              <div>
　                <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                   </div>
　                </div>
　             </div>
　            