#script to generate code


import os
import sys
import re

def convert_to_snake_case(name):
    s1 = re.sub('(.)([A-Z][a-z]+)', r'\1_\2', name)
    return re.sub('([a-z0-9])([A-Z])', r'\1_\2', s1).lower()

def edit_client_file(folder_path, file_name):
    full_file_name = folder_path + '/rest_client/' + file_name
    print(full_file_name)
    f = open(full_file_name,"w+")
    f.write("<?php")
    f.write("\n")
    f.write("\n")
    f.write("// GENERATED CODE -- DO NOT EDIT!")
    f.write("\n")
    f.write("\n")
    f.write("namespace Practo\MDS\Model {")
    f.write("\n")
    f.write("\n")
    class_name = file_name.split(".")[0]
    print(class_name)
    f.write("  class " + class_name + " {\n")
    
    # generate the constructor
    f.write("\n")
    f.write("    public function __construct($restUtility) {")
    f.write("\n")
    f.write("      $this->restUtility = $restUtility;")
    f.write("\n")
    f.write("    }\n")

    #generate search function
    concept_name = class_name.replace("Client", "")
    searchRequest = concept_name + 'SearchRequest'
    search_rest_path_name = convert_to_snake_case(concept_name)
    response_type = concept_name + 'Model'
    response_class = concept_name + 'ModelList'
    response_method = 'set' + concept_name
    fetch_all_response_class = 'FetchAll' + concept_name + 'Response'

    f.write("\n")
    f.write("    public function search(\Practo\MDS\Model\\" + searchRequest + " $argument,\n")
    f.write("      $metadata = [], $options = []) {\n")
    f.write("      $searchParams = array(\n")
    f.write("        'q' => $argument->getQ(),\n")
    f.write("        'offset' => $argument->getOffset()\n")
    f.write("      );\n")
    f.write("      if ($argument->getLimit()) {\n")
    f.write("        $searchParams['limit'] = $argument->getLimit();\n")
    f.write("      }\n")
    f.write("      $this->restUtility->setPath('/search/" + search_rest_path_name + "');\n")
    f.write("      $this->restUtility->setMethod('GET');\n")
    f.write("      $this->restUtility->setDefaultHeaders();\n")
    f.write("      $this->restUtility->setQuery($searchParams);\n")
    f.write("      $this->restUtility->setResponseType('Practo\MDS\Model\\" + response_type + "');\n")
    f.write("      $this->restUtility->setResponseClass('Practo\MDS\Model\\" + response_class + "');\n")
    f.write("      $this->restUtility->setResponseMethod('" + response_method + "');\n")
    f.write("      $this->restUtility->setFetchAllResponseClass('Practo\MDS\Model\\" + fetch_all_response_class + "');\n")
    f.write("\n")
    f.write("      return $this->restUtility;\n")
    f.write("    }\n")

    #generate search extended function
    extended_response_type = concept_name + 'ExtendedModel'
    extended_response_class = concept_name + 'ExtendedModelList'
    extended_fetch_all_response_class = 'FetchAll' + concept_name + 'ExtendedResponse'
    
    f.write("\n")
    f.write("    /**\n")
    f.write("     * @param \Practo\MDS\Model\\" + searchRequest + " $argument input argument\n")
    f.write("     * @param array $metadata metadata\n")
    f.write("     * @param array $options call options\n")
    f.write("     */\n")
    f.write("    public function searchExtended(\Practo\MDS\Model\\" + searchRequest + " $argument,\n")
    f.write("      $metadata = [], $options = []) {\n")
    f.write("\n")
    f.write("      $searchParams = array(\n")
    f.write("        'q' => $argument->getQ(),\n")
    f.write("        'extended' => \"true\",\n")
    f.write("        'offset' => $argument->getOffset()\n")
    f.write("      );\n")
    f.write("\n")
    f.write("      if ($argument->getLimit()) {\n")
    f.write("        $searchParams['limit'] = $argument->getLimit();\n")
    f.write("      }\n")
    f.write("\n")
    f.write("      $this->restUtility->setPath('/search/" + search_rest_path_name + "');\n")
    f.write("      $this->restUtility->setMethod('GET');\n")
    f.write("      $this->restUtility->setDefaultHeaders();\n")
    f.write("      $this->restUtility->setQuery($searchParams);\n")
    f.write("      $this->restUtility->setResponseType('Practo\MDS\Model\\" + extended_response_type + "');\n")
    f.write("      $this->restUtility->setResponseClass('Practo\MDS\Model\\" + extended_response_class + "');\n")
    f.write("      $this->restUtility->setResponseMethod('" + response_method + "');\n")
    f.write("      $this->restUtility->setFetchAllResponseClass('Practo\MDS\Model\\" + extended_fetch_all_response_class + "');\n")
    f.write("\n")
    f.write("      return $this->restUtility;\n")
    f.write("    }\n")

    #generate fetch function
    fetch_response = class_name + 'Response'

    f.write("\n")
    f.write("   /**\n")
    f.write("    * @param \Practo\MDS\Model\FetchRequest $argument input argument\n")
    f.write("    * @param array $metadata metadata\n")
    f.write("    * @param array $options call options\n")
    f.write("    */\n")
    f.write("   public function fetch(\Practo\MDS\Model\FetchRequest $argument,\n")
    f.write("     $metadata = [], $options = []) {\n")
    f.write("\n")
    f.write("       $path = \"/concept/drug_brand/\".$argument->getConceptId();\n")
    f.write("       $this->restUtility->setPath($path);\n")
    f.write("       $this->restUtility->setMethod('GET');\n")
    f.write("       $this->restUtility->setDefaultHeaders();\n")
    f.write("       $this->restUtility->setResponseType('Practo\MDS\Model\\" + response_type + "');\n")
    f.write("       $this->restUtility->setResponseClass('Practo\MDS\Model\\" + fetch_response + "');\n")
    f.write("       $this->restUtility->setResponseMethod('" + response_method + "');\n")
    f.write("\n")
    f.write("       return $this->restUtility;\n")
    f.write("   }\n")

    
    #generate fetch extended function
    fetch_rest_path_name = '/concept/' + convert_to_snake_case(concept_name)
    fetch_extended_response = 'Fetch' + class_name + 'ExtendedResponse'

    f.write("   /**\n")
    f.write("    * @param \Practo\MDS\Model\FetchRequest $argument input argument\n")
    f.write("    * @param array $metadata metadata\n")
    f.write("    * @param array $options call options\n")
    f.write("    */\n")
    f.write("   public function fetchExtended(\Practo\MDS\Model\FetchRequest $argument,\n")
    f.write("     $metadata = [], $options = []) {\n")
    f.write("\n")
    f.write("       $path = '" + fetch_rest_path_name + "/'.$argument->getConceptId();\n")
    f.write("       $this->restUtility->setPath($path);\n")
    f.write("       $this->restUtility->setMethod('GET');\n")
    f.write("\n")
    f.write("       $searchParams = array(\n")
    f.write("        'extended' => \"true\",\n")
    f.write("       );\n")
    f.write("       $this->restUtility->setQuery($searchParams);\n")
    f.write("       $this->restUtility->setDefaultHeaders();\n")
    f.write("       $this->restUtility->setResponseType('Practo\MDS\Model\\" + extended_response_type + "');\n")
    f.write("       $this->restUtility->setResponseClass('Practo\MDS\Model\\" + fetch_extended_response +  "');\n")
    f.write("       $this->restUtility->setResponseMethod('" + response_method + "');\n")
    f.write("\n")
    f.write("       return $this->restUtility;\n")
    f.write("   }\n")

    #generate fetch all function
    
    f.write("\n")
    f.write("   /**\n")
    f.write("     * @param \Practo\MDS\Model\FetchAllRequest $argument input argument\n")
    f.write("     * @param array $metadata metadata\n")
    f.write("     * @param array $options call options\n")
    f.write("     */\n")
    f.write("    public function fetchAll(\Practo\MDS\Model\FetchAllRequest $argument,\n")
    f.write("      $metadata = [], $options = []) {\n")
    f.write("\n")
    f.write("      $searchParams = array(\n")
    f.write("        'offset' => $argument->getOffset()\n")
    f.write("      );\n")
    f.write("      if ($argument->getLimit()) {\n")
    f.write("        $searchParams['limit'] = $argument->getLimit();\n")
    f.write("      }\n")
    f.write("      $this->restUtility->setPath('" + fetch_rest_path_name + "');\n")
    f.write("      $this->restUtility->setMethod('GET');\n")
    f.write("      $this->restUtility->setDefaultHeaders();\n")
    f.write("      $this->restUtility->setQuery($searchParams);\n")
    f.write("      $this->restUtility->setResponseType('Practo\MDS\Model\\" + response_type + "');\n")
    f.write("      $this->restUtility->setResponseClass('Practo\MDS\Model\\" + response_class + "');\n")
    f.write("      $this->restUtility->setResponseMethod('" + response_method + "');\n")
    f.write("      $this->restUtility->setFetchAllResponseClass('Practo\MDS\Model\\" + fetch_all_response_class + "');\n")
    f.write("\n")
    f.write("      return $this->restUtility;\n")
    f.write("    }\n")

    #generate fetch all extended function
    f.write("\n")
    f.write("   /**\n")
    f.write("     * @param \Practo\MDS\Model\FetchAllRequest $argument input argument\n")
    f.write("     * @param array $metadata metadata\n")
    f.write("     * @param array $options call options\n")
    f.write("     */\n")
    f.write("    public function fetchAllExtended(\Practo\MDS\Model\FetchAllRequest $argument,\n")
    f.write("      $metadata = [], $options = []) {\n")
    f.write("        $this->restUtility->setPath('" + fetch_rest_path_name + "');\n")
    f.write("        $this->restUtility->setMethod('GET');\n")
    f.write("\n")
    f.write("        $searchParams = array(\n")
    f.write("         'extended' => \"true\",\n")
    f.write("         'offset' => $argument->getOffset()\n")
    f.write("        );\n")
    f.write("        $this->restUtility->setQuery($searchParams);\n")
    f.write("        $this->restUtility->setDefaultHeaders();\n")
    f.write("        $this->restUtility->setResponseType('Practo\MDS\Model\\" + extended_response_type + "');\n")
    f.write("        $this->restUtility->setResponseClass('Practo\MDS\Model\\" + extended_response_class + "');\n")
    f.write("        $this->restUtility->setResponseMethod('" + response_method + "');\n")
    f.write("        $this->restUtility->setFetchAllResponseClass('Practo\MDS\Model\\" + extended_fetch_all_response_class + "');\n")
    f.write("\n")
    f.write("        return $this->restUtility;\n")
    f.write("    }\n")
    f.write("\n")
    f.write("  }\n")

    f.write("}")






#get current file path
path = os.getcwd()
#get model folder
path = path + '/Model'

#get list of all client files
client_file_list = []
for file in os.listdir(path):
    if "Client.php" in file:
        edit_client_file(path, file)

