#script to generate code

import os
import sys
import re

def convert_to_snake_case(name):
    s1 = re.sub('(.)([A-Z][a-z]+)', r'\1_\2', name)
    return re.sub('([a-z0-9])([A-Z])', r'\1_\2', s1).lower()

proto_to_php_types = {
    "double": "float",
    "float": "float",
    "int32": "integer",
    "int64": "integer",
    "uint32": "integer",
    "uint64": "integer",
    "sint32": "integer",
    "sint64": "integer",
    "fixed32": "integer",
    "fixed64": "integer",
    "sfixed32": "integer",
    "sfixed64": "integer",
    "bool": "boolean",
    "string": "string",
    "bytes": "string"
}


def create_jms_annotation(type_str):
    type_str_arr = type_str.split(" ")
    truncate_slice_obj = slice(len(type_str_arr) - 3, len(type_str_arr), 1)
    truncate_str = ' '.join(type_str_arr[truncate_slice_obj])
    field_type_str = type_str.replace(truncate_str, "").strip()
    jms_annotation = field_type_str
    if " " in field_type_str:
        jms_annotation_arr = field_type_str.split(" ")
        if jms_annotation_arr[0] == 'repeated':
            field_type = jms_annotation_arr[1]
            if field_type in proto_to_php_types.keys():
                field_type = proto_to_php_types[field_type]
            field_type = field_type.replace(".", "\\")
            if field_type[0] == '\\':
                jms_annotation = 'array<' + field_type[1:] + '>'
            else:
                jms_annotation = 'array<' + field_type + '>'
    elif field_type_str in proto_to_php_types.keys():
        jms_annotation = proto_to_php_types[field_type_str]
    jms_annotation = '@Type("' + jms_annotation + '")'        
    
    return jms_annotation

# creating new model files with jms annotations
def create_model_jms_annotation(folder_path, file_name):
    print('generating jms annotations for: ' + file_name)
    input_file_name = folder_path + '/' + file_name
    output_file_name = folder_path + '/rest_models/' + file_name
    input_f = open(input_file_name, 'r')
    out_f = open(output_file_name,"w+")
    # to prevent writing annotaions on setters and getters
    annotation_input_list = []
    for line in input_f:
        out_f.write(line)
        if "<code>" in line and "Protobuf" not in line:
            annotation_input = line.strip().replace("<code>","").replace("</code>","").strip("*")
            if annotation_input not in annotation_input_list:
                jms_annotation = create_jms_annotation(annotation_input)
                annotation_input_list.append(annotation_input)
                out_f.write('     * ' + jms_annotation + '\n')


#generate individual client files
def gen_client_file(folder_path, file_name):
    full_file_name = folder_path + '/rest_client/' + file_name
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


#method to create clients for concepts (rest version of the clients).
def create_concept_clients():
    #get current file path
    path = os.getcwd()
    #get model folder
    path = path + '/Model'

    #get list of all client files
    client_file_list = []
    for file in os.listdir(path):
        if "Client.php" in file:
            gen_client_file(path, file)

# loop through all the models, and add the jms annoations
def create_concept_models():
    #get current file path
    path = os.getcwd()
    #get model folder
    path = path + '/Model'

    #get list of all client files
    client_file_list = []
    for file in os.listdir(path):
        if "Model.php" in file:
            create_model_jms_annotation(path, file)


#methods to run
create_concept_clients()
create_concept_models()


