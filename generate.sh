java -jar modules/swagger-codegen-cli-2.2.2.jar generate \
    -i https://api.esagu.de/amzn/repricing/v1/swagger.json \
    --invoker-package "eSagu\Amzn\RePricing\V1" \
    --api-package "eSagu\Amzn\RePricing\V1\Api" \
    --model-package "eSagu\Amzn\RePricing\V1\Model" \
    -l php \
    -o ./amzn-src/

chmod +x ./amzn-src/SwaggerClient-php/git_push.sh

java -jar modules/swagger-codegen-cli-2.2.2.jar generate \
    -i https://api.esagu.de/ebay/repricing/v1/swagger.json \
    --invoker-package "eSagu\Ebay\RePricing\V1" \
    --api-package "eSagu\Ebay\RePricing\V1\Api" \
    --model-package "eSagu\Ebay\RePricing\V1\Model" \
    -l php \
    -o ./ebay-src/

chmod +x ./ebay-src/SwaggerClient-php/git_push.sh